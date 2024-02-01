<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Page\Page;
use App\Models\Comment\Comment;
use Illuminate\Foundation\Testing\WithFaker;
use App\Repositories\Comment\CommentRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CommentRepositoryTest extends TestCase
{
    use DatabaseTransactions;


    protected $commentRepository;

    public function setUp(): void
    {
        parent::setUp();
        $this->commentRepository = app(CommentRepository::class);
    }


    public function test_method_index(): void
    {
        $comments = $this->commentRepository->index();

        // Assert that $comments is not empty
        $this->assertNotEmpty($comments);
    }


    public function test_method_store_comment(): void
    {
        $page = Page::first();

        $validatedData = [
            'comment' => 'This comment for test',
            'reference' => 'Sample reference',
            'page_id' => $page->id,
        ];

        $this->commentRepository->store($validatedData);

        $this->assertDatabaseHas('comments', [
            'comment' => 'This comment for test'
        ]);

    }

    public function test_method_edit_comment(): void
    {
        $comment = Comment::first();

        $response = $this->commentRepository->edit($comment);

        // Assert that the response is not null
        $this->assertNotNull($response);

        // Assert that the response contains the comment instance
        $this->assertInstanceOf(Comment::class, $response);
    }



    public function test_method_update_comment(): void
    {

        $comment = Comment::first();
        $page = Page::first();

        $validatedData = [
            'comment' => 'This comment updated for test',
            'reference' => 'Sample reference',
            'page_id' => $page->id,
        ];


        $updatedComment = $this->commentRepository->update($validatedData, $comment);

        $this->assertInstanceOf(Comment::class, $updatedComment);

        $this->assertDatabaseHas('comments', [
            'comment' => 'This comment updated for test'
        ]);
    }




    public function test_method_destroy_comment(): void
    {
        $comment = Comment::first();

        // Call the destroy method
        $this->commentRepository->destroy($comment);

        // Assert that the comment no longer exists in the database
        $this->assertDatabaseMissing('comments', [
            'id' => $comment->id,
        ]);
    }




}

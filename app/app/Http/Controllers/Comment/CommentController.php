<?php

namespace App\Http\Controllers\Comment;

use App\Models\Page\Page;
use Illuminate\Http\Request;
use App\Models\Comment\Comment;
use App\Http\Controllers\Controller;
use App\Repositories\Page\PageRepository;
use App\Repositories\Comment\CommentRepository;

class CommentController extends Controller
{
    protected $commentRepository;

    public function __construct(CommentRepository $commentRepository){
        $this->commentRepository = $commentRepository;
    }



    public function index()
    {

        $pageComments = $this->commentRepository->pageComments();

        return view('comment.index', compact('pageComments'));
    }

    public function create()
    {

        $PageRepository = new PageRepository(new Page);
        $pages = $PageRepository->index();
        return view('comment.create',compact('pages'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'comment' => 'required|string|max:255',
            'page_id' => 'required|int',
        ]);

        $this->commentRepository->store($data);

        return redirect()->route('comment.index')->with('success', 'Comment créé avec succès');
    }



    public function edit(Comment $comment)
    {
        $PageRepository = new PageRepository(new Page);
        $pages = $PageRepository->index();
        return view('comment.edit', compact('comment','pages'));
    }




    public function update(Request $request, Comment $comment)
    {

        $data = $request->validate([
            'comment' => 'required|string|max:255',
            'page_id' => 'required|int',
        ]);

        $this->commentRepository->update($data, $comment);

        return redirect()->route('comment.index')->with('success', 'Comment updated avec succès');
    }



    public function destroy(Comment $comment)
    {

        $this->commentRepository->destroy($comment);

        return redirect()->route('comment.index')->with('success', 'Comment deleted avec succès');

    }

}

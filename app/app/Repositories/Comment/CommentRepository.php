<?php

namespace App\Repositories\Comment;

use App\Models\Comment\Comment;
use App\Repositories\BaseRepository;

class CommentRepository extends BaseRepository
{


    public function __construct(Comment $Comment)
    {
        parent::__construct($Comment);
    }




}

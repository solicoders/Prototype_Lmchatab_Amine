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


    function pageComments(){
        return $this->model->with('page')->paginate(3);
    }


    public function store(array $data){
        if(isset($data)){
            $data["reference"] = 'reference 213';
        }
        parent::store($data);
    }



}

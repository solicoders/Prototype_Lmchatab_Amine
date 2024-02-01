<?php

namespace App\Models\Comment;

use App\Models\Page\Page;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;



    protected $fillable = [
        'comment',
        'reference',
        'page_id'
    ];


    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}

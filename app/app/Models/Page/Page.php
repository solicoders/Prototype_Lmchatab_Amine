<?php

namespace App\Models\Page;

use App\Models\Comment\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;



    protected $fillable = [
        'page_key',
        'page_title',
        'reference',
    ];


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

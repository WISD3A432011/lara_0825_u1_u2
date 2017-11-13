<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
class Post extends Model
{
    //單元一練習1-2
    protected $table = 'posts';
    //
    protected $fillable=[
        'title',
        'content',
        'is_feature'
    ];
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}


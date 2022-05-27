<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use App\Http\Controllers\CommentController;


class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'body',
        'authorName',
    ];

//     protected static function newFactory(): PostFactory
//     {
//         return new PostFactory();
//     }

//     public function comments(): MorphMany
//     {
//         return $this->morphMany(Comment::class, 'commentable');
//     }
// }

protected static function newFactory(): PostFactory
{
    return new PostFactory();
}

public function comments(): MorphMany
{
    return $this->morphMany(Comment::class, 'commentable');
}
}
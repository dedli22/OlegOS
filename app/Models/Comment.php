<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use App\Http\Controllers\CommentController;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'authorName',
        'body',
        'commentable_id',
        'commentable_type',
        'parent_id',
    ];

    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
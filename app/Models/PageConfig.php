<?php

namespace App\Models;

use Database\Factories\PageConfigFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageConfig extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_title',
        'page_offline',
        'page_offline_msg',
        'page_version',
        'posts_per_page',
        'news_per_page',
    ];

    protected static function newFactory(): PageConfigFactory
    {
        return new PageConfigFactory();
    }


    public function limit()
    {
        return $this->hasOne('App\post');
    }

}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\MainNavFactory;

class MainNav extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'link',
        'order',
        'visible',
    ];

    protected static function newFactory() : MainNavFactory
    {
        return new MainNavFactory();
    }
}

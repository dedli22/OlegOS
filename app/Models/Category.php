<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $filable = [
        'name',
        'slug',
        'image',
        'description',
        'created_by_id',
        'created_by_firstName',
        'created_by_lastName',
    ];
}

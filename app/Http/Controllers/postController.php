<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function index()
    {
        $name = 'Aigars';
        return view('news', [
            'name' => $name,
        ]);
    }
}

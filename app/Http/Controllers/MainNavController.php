<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMainNavRequest;
use App\Http\Requests\UpdateMainNavRequest;
use App\Models\MainNav;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class MainNavController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('navigation.index', [

            'MainNavs' => MainNav::all()->sortBy('order'),

        ]);
    }
}

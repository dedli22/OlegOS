<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\MainNavController;
use App\Http\Controllers\postController;
use App\Models\MainNav;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use PhpParser\Node\Expr\FuncCall;;
use App\Models\Comment;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('posts.index');
// });

//Route::get('/posts',  [postController::class, 'index']);


// Route::controller(MainNavigationController::class)->group(function () {
//     Route::get('/navigation', 'navigation.index');
// });

Route::get('/',  [MainNavController::class, 'index']);


Route::get('home', [FrontController::class, 'home'])->name('home');
Route::get('products', [FrontController::class, 'products'])->name('products.index');
Route::get('about-us', [FrontController::class, 'aboutUs'])->name('about.us');


// Post Links 
Route::controller(postController::class)->group(function () {
    Route::get('/', 'index')->name('posts.index');
    Route::prefix('posts')->group(function () {
        Route::get('/create', 'create')->name('posts.create');
        Route::post('/create', 'store');
        Route::get('/show/{post}', 'show')->name('posts.show');
        Route::get('/edit/{post}', 'edit')->name('posts.edit');
        Route::post('/edit/{post}', 'update');
        Route::get('/delete/{post}', 'destroy')->name('posts.destroy');
        Route::get('/admin', 'admin')->name('posts.admin');
    });
});


// Comments 
// Route::controller(CommentController::class)->group(function () {
//     Route::prefix('comments')->group(function () {
//         Route::post('/store', 'store')->name('comments.store');
//     });
// });

Route::controller(CommentController::class)->group(function () {
    Route::prefix('comments')->group(function () {
        Route::get('/', function () {
            $comment = Comment::find(1);
            dd($comment->commentable);
        });
        Route::post('/store', 'store')->name('comments.store');
    });
});

// Route::get('/a', function () {
//     return view('posts.index');
// });


// Route::get('/posts', function () {
//     $posts = Post::get();
//     dd($posts);
//     //return view('home');
// });

// Route::get('/news', [PostController::class, 'name']);

// Route::get('/test', function () {
//     return view('test');
// });



Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/portal_v3', function () {
    return view('portal_v3');
});

Route::get('/taill', function () {
    return view('taill');
});

<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\MainNavController;
use App\Http\Controllers\PageConfigController;
use App\Http\Controllers\postController;
use App\Models\MainNav;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use PhpParser\Node\Expr\FuncCall;;

use App\Models\Comment;
use GuzzleHttp\Middleware;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::get('/', function() {
    return redirect(app()->getLocale());
});

Route::get('/dashboard', function (){
    return redirect(app()->getLocale());
});


Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'setLocale',
    ], function () {
    Route::get('/', function () {
        return view('welcome');
    });


    Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// Route::get('/',  [MainNavController::class, 'index']);


// // Post Links 
// Route::controller(postController::class)->group(function () {
//     Route::get('/', 'index')->name('posts.index');
//     Route::prefix('admin/posts')->group(function () {
//         Route::get('/create', 'create')->name('posts.create');
//         Route::post('/create', 'store');
//         Route::get('/show/{post}', 'show')->name('posts.show');
//         Route::get('/edit/{post}', 'edit')->name('posts.edit');
//         Route::post('/edit/{post}', 'update');
//         Route::get('/delete/{post}', 'destroy')->name('posts.destroy');
//         Route::get('/admin', 'admin')->name('posts.admin');
//     });
// });


// // Comments 
// Route::controller(CommentController::class)->group(function () {
//     Route::prefix('comments')->group(function () {
//         Route::get('/', function () {
//             Route::post('/reply/store', 'replyStore')->name('reply.add');
//             // $comment = Comment::find(1);
//             // dd($comment->commentable);
//         });
//         Route::post('/store', 'store')->name('comments.store');
//         Route::post('/reply/store', 'replyStore')->name('reply.add');
//     });
// });

// // Admin page 
// // Route::prefix('admin')->group(function () {
// //     Route::get('/index', '');
// // });
// Route::get('/admin', function () {
//     return view('admin/index');
// });

// // Main Navigation MainNav
// Route::controller(MainNavController::class)->group(function () {
//     Route::prefix('admin/mainNav')->group(function () {
//         Route::get('/', 'index')->name('MainNav.index');
//         Route::get('/create', 'create')->name('MainNav.create');
//         Route::Post('/create', 'store');
//         Route::get('/show/{MainNav}', 'show')->name('MainNav.show');
//         Route::get('/edit/{MainNav}', 'edit')->name('MainNav.edit');
//         Route::Post('/edit/{MainNav}', 'update');
//         Route::get('/delete/{MainNav}', 'destroy')->name('MainNav.destroy');
//     });
// });

// // Config page 
// Route::controller(PageConfigController::class)->group(function () {
//     Route::prefix('admin/PageConfig')->group(function () {
//         Route::get('/', 'index')->name('PageConfig.index');
//         Route::get('/show', 'show')->name('PageConfig.show');
//         Route::Post('/show', 'update')->name('PageConfig.update');
//         Route::get('/offline', 'offline')->name('PageConfig.offline');
//     });
// });

// // Tests
// Route::get('/welcome', function () {
//     return view('welcome')->name('welcome');
// });


// Route::get('/portal_v3', function () {
//     return view('portal_v3');
// });

// Route::get('/taill', function () {
//     return view('taill');
// });

// Route::get('/test', function () {
//     return view('test');
// });


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');






    require __DIR__ . '/auth.php';

});



// ->middleware('setLocale')








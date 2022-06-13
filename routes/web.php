<?php

use App\Http\Controllers\CategoryContriller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\MainNavController;
use App\Http\Controllers\PageConfigController;
use App\Http\Controllers\postController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserConstroller;
use App\Http\Middleware\CheckIsAdmin;
use App\Http\Middleware\CheckIsModerator;
use App\Http\Middleware\CheckIsMainAdmin;
use Illuminate\Support\Facades\Route;




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

    Route::get('/dashboard2', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard2');



    // Admin page 
        Route::get('/admin', function () {
        return view('admin/index');
    })->middleware(['CheckIsAdmin'])->name('admin.index');

    // ALL USERS 

    Route::get('/login2', function () {
        return view('login');
    })->name('login2');

        //User Profile
        Route::middleware(['auth'])->group(function () {
            Route::prefix('/user')->group(function () {
                Route::controller(UserConstroller::class)->group(function () {         
                    route::get('/{user}/edit', 'editMainInfo')->name('users.UsersEditMainInfo');
                    route::get('/{user}/edit/Picture', 'editProfilePicture')->name('users.editProfilePicture');
                    route::post('/{user}/edit/Picture', 'updateProfilePicture')->name('users.updateProfilePicture');
                    route::get('/{user}/edit/password', 'changePassword')->name('users.changePassword');
                });
            });

            // Profile page
            Route::controller(ProfileController::class)->group(function () {
                Route::get('user/{user}', 'profileTimeline')->name('user.profile.timeline');
                    Route::prefix('/{user}/profile/')->group(function() {                    
                        Route::get('Info', 'profileBaisicInfo')->name('user.profile.basicInfo');
                        Route::get('about', 'ProfileAbout')->name('user.profile.about');
                        Route::get('contacts', 'ProfileContacts')->name('user.profile.contacts');
                        Route::get('comments', 'ProfileComments')->name('user.profile.comments');
                    });
            });

            // Friend list
            Route::prefix('friends')->group(function() {
                Route::controller(FriendController::class)->group(function () {
                    Route::get('/friend', 'showAllUsers')->name('friends.show');
                });
            });


        });


        
    
    // AUTH USERS

    // MODERATROS

    // ADMIN
    Route::middleware([CheckIsAdmin::class])->group(function () {
        Route::prefix('admin')->group(function () {
            //Posts = News
            Route::controller(postController::class)->group(function () {                       
                Route::get('/create', 'create')->name('posts.create');
                Route::post('/create', 'store');
                Route::get('/edit/{post}', 'edit')->name('posts.edit');
                Route::post('/edit/{post}', 'update');
                Route::get('/delete/{post}', 'destroy')->name('posts.destroy');
                Route::get('/admin', 'admin')->name('posts.admin');           
            });


            //Category
            Route::prefix('categories')->group(function () { 
                Route::controller(CategoryController::class)->group(function () {
                    Route::get('/', 'index')->name('admin.categories.index');
                    Route::get('/create', 'create')->name('admin.categories.create');
                    Route::post('/create', 'store')->name('admin.categories.store');
                });
            });
        });
    });

    // MAIN ADMIN

    Route::get('/',  [MainNavController::class, 'index']);


    // Post Links 
    Route::controller(postController::class)->group(function () {
        Route::get('/', 'index')->name('posts.index');
        Route::get('/show/{post}', 'show')->name('posts.show');
        Route::prefix('admin/posts')->group(function () {
            // Route::get('/create', 'create')->name('posts.create');
            // Route::post('/create', 'store');        
            // Route::get('/edit/{post}', 'edit')->name('posts.edit');
            // Route::post('/edit/{post}', 'update');
            // Route::get('/delete/{post}', 'destroy')->name('posts.destroy');
            // Route::get('/admin', 'admin')->name('posts.admin');
        });
    });


    // Comments 
    Route::controller(CommentController::class)->group(function () {
        Route::prefix('comments')->group(function () {
            Route::get('/', function () {
                Route::post('/reply/store', 'replyStore')->name('reply.add');
                // $comment = Comment::find(1);
                // dd($comment->commentable);
            });
            Route::post('/store', 'store')->name('comments.store');
            Route::post('/reply/store', 'replyStore')->name('reply.add');
        });
    });

    // Admin page 
    // Route::prefix('admin')->group(function () {
    //     Route::get('/index', '');
    // });
    // Route::get('/admin', function () {
    //     return view('admin/index');
    // })->middleware(['CheckIsAdmin']);

    // Main Navigation MainNav
    Route::controller(MainNavController::class)->group(function () {
        Route::prefix('admin/mainNav')->group(function () {
            Route::get('/', 'index')->name('MainNav.index');
            Route::get('/create', 'create')->name('MainNav.create');
            Route::Post('/create', 'store');
            Route::get('/show/{MainNav}', 'show')->name('MainNav.show');
            Route::get('/edit/{MainNav}', 'edit')->name('MainNav.edit');
            Route::Post('/edit/{MainNav}', 'update');
            Route::get('/delete/{MainNav}', 'destroy')->name('MainNav.destroy');
        });
    });

    // Config page 
    Route::controller(PageConfigController::class)->group(function () {
        Route::prefix('admin/PageConfig')->group(function () {
            Route::get('/', 'index')->name('PageConfig.index');
            Route::get('/show', 'show')->name('PageConfig.show');
            Route::Post('/show', 'update')->name('PageConfig.update');
            Route::get('/offline', 'offline')->name('PageConfig.offline');
        });
    });

    // Tests
    Route::get('/welcome', function () {
        return view('welcome')->name('welcome');
    });


    Route::get('/portal_v3', function () {
        return view('portal_v3');
    });

    Route::get('/taill', function () {
        return view('taill');
    });

    Route::get('/test', function () {
        return view('test');
    });

    require __DIR__ . '/auth.php';


});



// ->middleware('setLocale')








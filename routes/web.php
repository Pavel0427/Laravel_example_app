<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
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



Route::get('/home', function () {
    return "<a href='contact'>Contact us</a>";
});

Route::get('/contact', function () {
    return "Contact Us page";
});

Route::get('about-us', function () {
    return "about us page";
})->name('about');


// ________________

Route::get('/myhome', [UserController::class, 'index'])->name('myhome');

Route::get('users/{id}', [UserController::class, 'show'])->name('user.show');

Route::get('users/{id}', [UserController::class, 'another'])->name('user.another');

Route::get('users ', [UserController::class, 'index'])->name('users');

Route::get('/indextest', function () {
    return view('user.indextest');
});

Route::get('/overview', function () {
    return view('user.overview');
});

// resource

Route::resource('posts', PostController::class);

Route::get('/dashboard', function () {
    return view('layouts.master');
});

// Database Connection Test
{
    Route::get('connection-test', function () {
        try {
            DB::connection()->getPDO();
            return "Connected Successfully";
        } catch (\Exception $e) {
            die("why?");
        }
    });
}

//post

{
    Route::get('/form', function () {
        return view('posts.create');
    });

    Route::get('post/createme', [PostController::class, 'create'])->name('posts.create');

    Route::post('post', [PostController::class, 'store'])->name('posts.store');
}

//get
//model name is post

Route::get('fetchtest', function () {


    // return Post::find(6);

    // return Post::where('title', 'LIKE', '%ghoster%')->first();

    // return Post::where('title', 'ghoster')->orWhere('description', 'a')->first();

    // return Post::where('title', 'Laravel')->first();

    return Post::where('title', 'ghoster')->get();
});

<?php
use Illuminate\Http\Request;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
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

Route::controller(PageController::class)->group(function () {
    Route::get('/',                         'home')->name('home');

    Route::get('/home',                     'home')->name('home');

    Route::get('blog',                      'blog')->name('blog');

    Route::get('blog/{post:slug}',          'post')->name('post');
});

Route::resource('posts', PostController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

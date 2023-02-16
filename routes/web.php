<?php

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


Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');

Auth::routes();
/* User Routes */
//Route::group(['middleware' => ['auth'],'namespace' => 'User', 'as' => 'user.', 'prefix' => 'user'], function () {
//    Route::get('/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('home');
//
//    Route::get('/post/create', [\App\Http\Controllers\User\PostController::class,'create_post'])->name('create_post');
//    Route::post('/post/create', [\App\Http\Controllers\User\PostController::class,'store_post'])->name('store_post');
//    Route::get('/post/single_view/{post_id}', [\App\Http\Controllers\User\PostController::class,'single_view'])->name('single_view');
//    Route::get('/post/remove/{post_id}', [\App\Http\Controllers\User\PostController::class,'delete_post'])->name('delete_post');
//    Route::get('/post/active/{post_id}', [\App\Http\Controllers\User\PostController::class,'active_post'])->name('active_post');
//    Route::get('/post/edit/{post_id}', [\App\Http\Controllers\User\PostController::class,'edit_post'])->name('edit_post');
//    Route::post('/post/edit/{post_id}', [\App\Http\Controllers\User\PostController::class,'update_post'])->name('update_post');
//
//});

Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('home');

   /* Route::get('/post/create', [\App\Http\Controllers\User\PostController::class,'create_post'])->name('create_post');
    Route::post('/post/create', [\App\Http\Controllers\User\PostController::class,'store_post'])->name('store_post');
    Route::get('/post/single_view/{post_id}', [\App\Http\Controllers\User\PostController::class,'single_view'])->name('single_view');
    Route::get('/post/remove/{post_id}', [\App\Http\Controllers\User\PostController::class,'delete_post'])->name('delete_post');
    Route::get('/post/active/{post_id}', [\App\Http\Controllers\User\PostController::class,'active_post'])->name('active_post');
    Route::get('/post/edit/{post_id}', [\App\Http\Controllers\User\PostController::class,'edit_post'])->name('edit_post');
    Route::post('/post/edit/{post_id}', [\App\Http\Controllers\User\PostController::class,'update_post'])->name('update_post');
    Route::post('/post/inline', [\App\Http\Controllers\User\PostController::class,'inline'])->name('inline');
*/
});

Route::get('/about', [App\Http\Controllers\template\AboutController::class, 'index'])->name('index');
Route::get('/blog', [App\Http\Controllers\template\blogController::class, 'index'])->name('index');
Route::get('/blogclassic', [App\Http\Controllers\template\blogController::class, 'blogclassic'])->name('blogclassic');
Route::get('/blog-filter', [App\Http\Controllers\template\blogController::class, 'blogwithfilter'])->name('blogwithfilter');
Route::get('/contact', [App\Http\Controllers\template\ContactController::class, 'index'])->name('index');
Route::get('/saas', [App\Http\Controllers\template\ContactController::class, 'saas'])->name('saas');
Route::get('/saas2', [App\Http\Controllers\template\ContactController::class, 'saas2'])->name('saas2');

Route::get('/index-app', [App\Http\Controllers\template\ContactController::class, 'indexapp'])->name('index-app');
Route::get('/agency', [App\Http\Controllers\template\ContactController::class, 'agency'])->name('agency');
Route::get('/agency-two', [App\Http\Controllers\template\ContactController::class, 'agencytwo'])->name('agency-two');
Route::get('/analytics', [App\Http\Controllers\template\ContactController::class, 'analytics'])->name('analytics');

Route::get('/service', [App\Http\Controllers\template\AboutController::class, 'service'])->name('service');
Route::get('/servicetwo', [App\Http\Controllers\template\AboutController::class, 'servicetwo'])->name('servicetwo');


Route::get('/comment', [App\Http\Controllers\template\AboutController::class, 'store'])->name('store');


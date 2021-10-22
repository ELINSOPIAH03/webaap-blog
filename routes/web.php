<?php

use App\Http\Controllers\AdminCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use GuzzleHttp\Middleware;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Elin Sopiah",
        "email" => "gitgit367@gmail.com"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/{post:slug}', [PostController::class, 'show']);
Route::get('/categories',[CategoryController::class,'index']);

// Route::get('/categories/{category:slug}', [CategoryController::class, 'showCategories']);

// Route::get('/authors/{author:username}', function(User $author){
    //     return view('posts',[
        //         'title'=>"Post by Author : $author->name",
        //         'posts'=>$author->post->load('category','author','user'),
        //     ]);
        // });

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');//middelware guest supaya yang dah login gabisa kesini file nya ada di bawaan  app/http/kernel
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index',[
        'title'=>'Dashboard'
    ]);
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug',[DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');


Route::get('/dashboard/categories/checkSlug',[AdminCategoryController ::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('is_admin');//si is_admin itu middelware kita sendiri bikin
// Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show');//ini menggunakan gate

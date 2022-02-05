<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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

// Route Category
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

// Route Blog
Route::get('/','PostController@index');
Route::get('/blog','PostController@index');
Route::get('/blog/{posts:slug}', 'PostController@show');

// Route Login
Route::get('/login','LoginController@index')->name('login')->middleware('guest'); 
Route::post('/login','LoginController@authenticate');
Route::post('/logout','LoginController@logout');
// Route Register
Route::get('/register','RegisterController@index')->middleware('guest');
Route::post('/register','RegisterController@store');
// route dashboard
Route::get('/dashboard',
function(){return view('dashboard.index');})->middleware('auth');
//Route Ckeck Slug
Route::get('/dashboard/posts/checkSlug','DashboardPostController@checkSlug')->middleware('auth');
// route dashboard/posts
Route::resource('/dashboard/posts', 'DashboardPostController')->middleware('auth');
// route dashboard/category
Route::resource('/dashboard/categories', 'CategoryController')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard.index');
});





// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts',[
//         'title' => "Post By Category : $category->name",
//         'posts' => $category->posts->load('category', 'author')
//     ]);
// });

// Route::get('/author/{author:username}', function(User $author){
//     return view('posts',[
//         'title' => "Post By Author : $author->name",
//         'posts' => $author->posts->load('category', 'author')
//     ]);
// });

Route::get('/layouts-v2', function () {
    return view('layouts.main');
});



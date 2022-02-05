<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostApiController;
use App\Http\Controllers\CategoryApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// route API posts
Route::resource('posts', 'PostApiController');
Route::get('search/{title}', 'PostApiController@search');
Route::get('search/{user_id}', 'PostApiController@search');

// route API Category
Route::resource('categories', 'CategoryApiController');
// Route::get('search/{name}', 'CategoryApiController@search');
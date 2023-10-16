<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// all blogs
Route::get('blogs',[App\Http\Controllers\BlogsControllers::class, 'blogsapi'])->name('blogsapi');

//show blog
Route::get('/blog/{id}',[App\Http\Controllers\BlogsControllers::class,'show_blog']);

// all talents
Route::get('/talents/{id}',[App\Http\Controllers\BlogsControllers::class,'talents']);

// all models
Route::get('/models',[App\Http\Controllers\BlogsControllers::class, 'models']);

//show model
Route::get('/models/{models}',[App\Http\Controllers\BlogsControllers::class,'show_model']);

// all countries
Route::get('/countries',[App\Http\Controllers\BlogsControllers::class,'countries']);

// all services
Route::get('/services',[App\Http\Controllers\BlogsControllers::class,'services']);

// all locations
Route::get('/locations',[App\Http\Controllers\BlogsControllers::class,'locations']);

//show tanlents
Route::get('/talents/{id}',[App\Http\Controllers\BlogsControllers::class,'talents']);

// all services
Route::get('/tech',[App\Http\Controllers\BlogsControllers::class, 'alltech']);

Route::get('/tech/{id}',[App\Http\Controllers\BlogsControllers::class, 'tech']);

// all locations
Route::get('/location/{id}',[App\Http\Controllers\BlogsControllers::class, 'location']);
// send Massage
Route::post('/massage',[App\Http\Controllers\BlogsControllers::class, 'massage']);

// Register Talient
Route::post('/register',[App\Http\Controllers\BlogsControllers::class, 'register_talent']);
// Sms sent
Route::post('/send-code',[App\Http\Controllers\BlogsControllers::class, 'SMSSent']);
// Register Service
Route::post('/registerservice',[App\Http\Controllers\BlogsControllers::class, 'insertnewservice']);







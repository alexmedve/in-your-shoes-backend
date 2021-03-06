<?php

use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\BlogController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/post/{id?}', [BlogController::class, 'addPost']);
Route::post('/blog/post/{id?}', [BlogController::class, 'createPost']);
Route::get('/blog/post/{id}/delete', [BlogController::class, 'deleteArticle']);

Route::get('/analytics', [AnalyticsController::class, 'index']);
Route::get('/analytics/{subscriber_id}', [AnalyticsController::class, 'subscriberProfile']);
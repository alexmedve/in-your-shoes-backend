<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\SessionController;
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

Route::get('/session/start', [SessionController::class, 'getKey']);
Route::post('/session/update', [SessionController::class, 'updateSession']);

Route::post('/contact', [SessionController::class, 'updateForm']);

Route::post('/newsletter/subscribe', [SessionController::class, 'subscribeToNewsletter']);
Route::post('/newsletter/update', [SessionController::class, 'updateNewsletter']);
Route::post('/newsletter', [SessionController::class, 'newsletter']);

Route::get('/blog/{category_id?}', [ApiController::class, 'blog']);
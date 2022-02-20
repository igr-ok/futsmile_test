<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
//use App\Http\Controllers\GetController;


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

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::get('/get', [PostController::class, 'index']);
    
});
//Route::get('/get', 'GetController');
//Route::get('/get', 'PostController');
//Route::get('/get', [PostController::class, 'index']);
//Route::get('data', [GetController::class, 'getData']);
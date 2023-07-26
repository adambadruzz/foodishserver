<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\JoinController;


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


// foodish
Route::get('foodish', [FoodController::class, 'readAll']);
Route::get('foodish/all', [FoodController::class, 'readFoodAll']);
Route::get('foodish/type/{type}', [FoodController::class, 'readFoodPlace']);
Route::get('foodish/search/{search}', [FoodController::class, 'readFoodSearch']);

Route::post('foodish', [FoodController::class, 'create']);
Route::put('foodish/{id_foodish}', [FoodController::class, 'update']);
Route::delete('foodish/{id_foodish}', [FoodController::class, 'delete']);


// User
Route::get('user', [UserController::class, 'readAll']);
Route::get('user/{id_user}', [UserController::class, 'readId']);
Route::get('user/email/{email}', [UserController::class, 'readEmail']);
Route::get('user/username/{username}', [UserController::class, 'readUsername']);
Route::get('user/ig/{ig}', [UserController::class, 'readIG']);
Route::get('user/email/{email}/{password}', [UserController::class, 'readLoginEmail']);
Route::get('user/username/{username}/{password}', [UserController::class, 'readLoginUsername']);

Route::post('user', [UserController::class, 'create']);
Route::put('user/{id_user}', [UserController::class, 'update']);
Route::delete('user/{id_user}', [UserController::class, 'delete']);



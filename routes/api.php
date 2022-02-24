<?php
namespace App\Http\Controllers;

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

// Comments
Route::get('comments', Comments\IndexController::class);
Route::post('comments', Comments\StoreController::class);
Route::put('comments/{comment}', Comments\UpdateController::class);
Route::delete('comments/{comment}', Comments\DestroyController::class);

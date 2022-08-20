<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\user\UserController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('/user')->group( function() {
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/test', function() {
        return 'hello';
    });
    Route::middleware('auth:api')->get('/all', [UserController::class, 'index']);
});

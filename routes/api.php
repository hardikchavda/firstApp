<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\API\AuthController;
use App\Http\Resources\UserInfoResource;
use App\Models\userInfo;
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

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/test', [adminController::class, 'allUsers']);

Route::middleware('auth:api')->group(function () {
    Route::get('get-user', [AuthController::class, 'userInfo']);

});

Route::get('/test', function () {
    return new UserInfoResource(userInfo::first());
});

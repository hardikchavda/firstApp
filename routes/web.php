<?php

use App\Http\Controllers\adminController;
use Illuminate\Routing\RouteGroup;
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

Route::group(['prefix' => 'admin'], function () {
    // Main Admin Dashboard Route
    Route::get('/', [adminController::class, 'index'])->name('main');
    // Add User Route
    Route::get('addUserInfo', [adminController::class, 'addUserInfo'])
        ->name('addUserInfo');
        // ->middleware('throttle:only_three_visit');
    Route::post('saveUserInfo', [adminController::class, 'saveUserInfo'])->name('saveUserInfo');
    Route::get('editUserInfo/{id}', [adminController::class, 'editUserInfo'])->name('editUserInfo');
    Route::post('updateUserInfo/{id}', [adminController::class, 'updateUserInfo'])->name('updateUserInfo');
    Route::get('delUserInfo/{id}', [adminController::class, 'delUserInfo'])->name('delUserInfo');
});

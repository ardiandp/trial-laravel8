<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Route::get("users_server_side", "UserController@getAllUserServerSide");

Route::get("users_server_side", "UserController@getAllUserServerSide")->name("user.data");
Route::get('users',[UsersController::class, 'getAllUser'])->name('users');

//ssd
Route::get("users_server_side", [UsersController::class, 'getAllUserServerSide'])->name('users_server_side');
Route::get('ssd_users',[UsersController::class, 'indexGetUser'])->name('ssd_users');
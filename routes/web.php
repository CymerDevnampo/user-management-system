<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserDetailsController;

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

// Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home', [UserDetailsController::class, 'showAllUsersDetails'])->name('home');
Route::get('/add-user', [UserDetailsController::class, 'viewAddUserPage']);
Route::post('/store-user', [UserDetailsController::class, 'storeUser']);
Route::get('/edit-user/{id}', [UserDetailsController::class, 'viewEditUserPage']);
Route::post('/update-user/{id}', [UserDetailsController::class, 'updateUser']);


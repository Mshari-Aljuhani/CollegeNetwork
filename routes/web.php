<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

//Methods routes
Route::post('/home',[UserController::class, 'upload'])->name('upload');
Route::put('/edit-user', [UserController::class, 'Update'])->name('user.update');
Route::patch('/edit-password-user', [UserController::class, 'passwordUpdate'])->name('user.password.update');
Route::patch('/updateImage', [PostController::class, 'updateImage'])->name('updateImage');


//Pages routes
Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile',[HomeController::class, 'profilePage'])->name('profilePage');

//Resource routes
Auth::routes();
Route::resource('posts', PostController::class);

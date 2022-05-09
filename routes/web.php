<?php

use App\Http\Controllers\follwingController;
use App\Http\Controllers\postController;
use App\Http\Controllers\profileController;
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

Route::get('/', [postController::class,'index']);

Auth::routes();

Route::get('/profile/{user}', [profileController::class, 'index'])->name('profile.show');
Route::get('/p/create', [postController::class, 'create'])->name('post.create');
Route::get('/p/{post}', [postController::class, 'show']);
Route::post('/p', [postController::class, 'store'])->name('post.store');
Route::get('/profile/{user}/edit', [profileController::class, 'edit']);
Route::post('/profile/{profile}', [profileController::class, 'update']);
// Route::post('/profile/{profile}', [profileController::class, 'update']);
// Route::patch()
Route::get('/follow/{user}', [follwingController::class, 'store']);

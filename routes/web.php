<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/profile/{user}', [profileController::class, 'index'])->name('profile.show');
Route::get('/p/create', [postController::class, 'create'])->name('post.create');
Route::get('/p/{post}', [postController::class, 'show']);
Route::post('/p', [postController::class, 'store'])->name('post.store');

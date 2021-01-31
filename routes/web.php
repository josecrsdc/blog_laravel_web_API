<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
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
    return view('inicio');
})->name('inicio');

// Route::get('post/nuevoPrueba', [PostController::class, 'nuevoPrueba'])->name('nuevoPrueba');
// Route::get('post/modificarPrueba/{id}', [PostController::class, 'modificarPrueba'])->name('modificarPrueba');

Route::resource('post', PostController::class);
Route::resource('comentario', ComentarioController::class);


Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');





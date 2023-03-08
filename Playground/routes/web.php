<?php

use App\Http\Controllers\{ActorsController, DirectorController};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('actors', [ActorsController::class, 'index']);

Route::group([
    'middleware' => 'auth',
    'prefix' => 'directors',
    'as' => 'director.'
], function () {
    Route::get('/', [DirectorController::class, 'index'])->name('index');
    Route::get('{directors}', [DirectorController::class, 'show'])->name('show');
});



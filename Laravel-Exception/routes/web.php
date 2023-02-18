<?php

use App\Http\Controllers\TransactionController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PagesController;
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

Route::middleware('auth')->get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/purchase', 'App\Http\Controllers\TransactionController', ['except' => 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/purchase', [TransactionController::class, 'index'])->name('purchase');
    Route::resource('/create_account', AccountController::class);
});

/*Refactor the Routes method 2*/
Route::get('/{page}', PagesController::class)
    ->name('page')
    ->where('page', 'about|contact_us|terms');

/*Refactor the Routes method 1*/
/*Route::view('/about', 'staticpages.about')->name('about');
Route::view('/contact_us', 'staticpages.contact_us')->name('contact_us');
Route::view('/terms', 'staticpages.terms')->name('terms');*/

/*Normal routes*/
/*Route::get('/about', [PagesController::class , 'about'])->name('about');
Route::get('/contact_us', [PagesController::class , 'contact_us'])->name('contact_us');
Route::get('/terms', [PagesController::class , 'terms'])->name('terms');*/

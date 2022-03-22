<?php

use App\Http\Controllers\AboutInformation;
use App\Http\Controllers\ContactInformation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\GeneralInformation;

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

Route::resource('/general', GeneralInformation::class);
Route::resource('about', AboutInformation::class);
Route::resource('contact',ContactInformation::class);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return redirect()->route('login');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/general', [GeneralController::class, 'index'])->name('general');
// Route::get('/edit/{id}', [GeneralController::class, 'edit'])->name('edit');

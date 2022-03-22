<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// $router->group(['prefix' => 'api'], function () use ($router) {
//     $router->get('/general', GeneralController::class,'general');

// });

//Routes for general section
Route::get('/general', [GeneralController::class, 'general']);
Route::post('/general', [GeneralController::class, 'general_insert']);
Route::put('/general/{id}', [GeneralController::class, 'general_update']);

//Routes for About section
Route::get('/about', [AboutController::class, 'about']);
Route::post('/about', [AboutController::class, 'about_insert']);
Route::put('/about/{id}', [AboutController::class, 'about_update']);

//Routes for contact section
Route::get('contact', [ContactController::class, 'contact']);
Route::post('contact', [ContactController::class, 'contact_insert']);
Route::put('contact/{id}', [ContactController::class, 'contact_update']);

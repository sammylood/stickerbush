<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StickerbushController;
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

/**
 * Routes vers les pages en ligne du site
 */
Route::get('/index', [StickerbushController::class, 'index']);
Route::get('/about', [StickerbushController::class, 'about']);
Route::get('/articles', [StickerbushController::class, 'articles']);
Route::get('/contact', [StickerbushController::class, 'contact']);

/**
 * Routes du formulaire de contact
 */
Route::post('/contact', [StickerbushController::class, 'contactForm']);
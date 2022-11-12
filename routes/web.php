<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MailController;

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
    return view('frontend.index');
});

Route::get('/about-us', [FrontendController::class, 'about']);
Route::get('/webdevelopment', [FrontendController::class, 'webdevelopment']);

// Route::get('/', [MailController::class, 'index']);
Route::post('/', [MailController::class, 'store'])->name('contact.us.store');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SchoolController;

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

Route::get('/', [WelcomeController::class, 'show']);

Route::get('/profile', [ProfileController::class, 'show']);

Route::get('/blog', [BlogController::class, 'show']);

Route::get('/dashboard', [DashboardController::class, 'show']);

Route::get('/school', [SchoolController::class, 'show']);

Route::resource('faq', FaqController::class);

// Route::get('/faq', [FaqController::class, 'index']);

// Route::post('/faq', [FaqController::class, 'store']);

// Route::get('/faq/create', [FaqController::class, 'create']);

// Route::get('/faq/{id}/edit', [FaqController::class, 'edit']);

// Route::put('/faq/{id}', [FaqController::class, 'update']);

// Route::delete('/faq/{id}', [FaqController::class, 'destroy']);

// Route::get('/profile', 'ProfileController@show');

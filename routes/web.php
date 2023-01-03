<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/add-contact', [ContactController::class, 'index'])->name('user.add-contact');
    Route::post('/create-contact', [ContactController::class, 'create'])->name('user.create-contact');
    Route::get('/contact-list', [ContactController::class, 'manage'])->name('user.contact-list');
    Route::get('/contact-edit/{id}', [ContactController::class, 'edit'])->name('user.contact-edit');
    Route::post('/contact-update/{id}', [ContactController::class, 'update'])->name('user.contact-update');
    Route::get('/contact-bookmark/{id}', [ContactController::class, 'bookmarkContact'])->name('user.contact-bookmark');
});

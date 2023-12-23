<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeasController;
use App\Http\Controllers\testController;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/ideas/{idea}', [IdeasController::class, 'show'])->name('ideas.show');

Route::get('/ideas/{idea}/edit', [IdeasController::class, 'edit'])->name('ideas.edit');

Route::post('/ideas', [IdeasController::class, 'store'])->name('ideas.create');

Route::delete('/ideas/{idea}', [IdeasController::class, 'destroy'])->name('ideas.destroy');


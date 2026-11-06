<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Synex Digital - Dynamic Server-Rendered Laravel Frontend
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AdminController;
use App\Models\Contact;
Route::get('/contact', [PortfolioController::class, 'contact']);
Route::get('/viewcontact', [AdminController::class, 'contactindex']);
Route::post('/contact', [PortfolioController::class, 'contactstore']);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/', [AdminController::class, 'index']);

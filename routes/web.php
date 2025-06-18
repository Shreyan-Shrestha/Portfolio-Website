<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AdminController;
use App\Models\Contact;
Route::get('/contact', [PortfolioController::class, 'contact']);
Route::get('/viewcontact', [AdminController::class, 'contactindex']);
Route::post('/contact', [AdminController::class, 'contactstore']);

Route::get('/resume', [PortfolioController::class, 'resume']);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/', [PortfolioController::class, 'index']);
Route::delete('/delete/{id}', [AdminController::class, 'destroy']);

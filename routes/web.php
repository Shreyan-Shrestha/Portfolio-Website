<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AdminController;
use App\Models\Contact;
Route::get('/contact', [PortfolioController::class, 'contact']);
Route::get('/viewcontact', [PortfolioController::class, 'viewcontact']);
Route::post('/contact', [PortfolioController::class, 'contactstore']);

Route::get('/contact', [PortfolioController::class, 'contact']);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

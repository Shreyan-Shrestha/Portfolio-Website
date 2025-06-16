<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Models\Contact;
Route::get('/contact', [PortfolioController::class, 'contact']);
Route::post('/contact', [PortfolioController::class, 'contactstore']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

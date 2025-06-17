<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/about', [PortfolioController::class, 'viewabout']);
Route::post('/about', [PortfolioController::class, 'aboutstore']);

Route::get('/', function () {
    return view('welcome');
});

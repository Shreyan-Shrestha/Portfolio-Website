<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AdminController;
use App\Models\Contact;
Route::get('/contact', [PortfolioController::class, 'contact']);
Route::get('/viewcontact', [AdminController::class, 'contactindex']);
Route::post('/contact', [AdminController::class, 'contactstore']);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/', [PortfolioController::class, 'index']);
Route::delete('/delete/{id}', [AdminController::class, 'destroy']);

Route::get('/skills', [AdminController::class, 'skills']);
Route::get('/addskill', [AdminController::class,'addskill']);
Route::post('/skills', [AdminController::class, 'skillstore']);
Route::put('/skilledit/{id}', [AdminController::class, 'skilledit']);
Route::get('/skilleditview/{id}', [AdminController::class, 'skilleditview']);
Route::delete('/deleteskill/{id}', [AdminController::class, 'destroyskill']);

Route::get('/qualification', [AdminController::class, 'qualifications']);
Route::get('/addqualification', [AdminController::class,'qualview']);
Route::post('/qualform', [AdminController::class,'qualform']);
Route::get('/qualeditview/{id}', [AdminController::class,'qualeditview']);
Route::put('/qualedit/{id}', [AdminController::class,'qualedit']);
Route::delete('/deletequal/{id}', [AdminController::class,'destroyqual']);

Route::get('/about', [AdminController::class,'about']);
Route::get('/addabout', [AdminController::class,'aboutview']);
Route::post('/aboutform', [AdminController::class,'aboutstore']);


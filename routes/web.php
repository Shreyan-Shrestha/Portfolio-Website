<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

Route::get('/register', [AuthController::class,'registerview'] );
Route::post('/register', [AuthController::class,'register'] );

Route::get('/login', [AuthController::class,'loginview'] )->name('login');
Route::post('/login', [AuthController::class,'login'] );
Route::post('/logout', [AuthController::class,'logout'] );

Route::get('/', [PortfolioController::class, 'index']);
Route::get('/resume', [PortfolioController::class, 'resume']);
Route::get('/projects', [PortfolioController::class, 'project']);
Route::get('/contact', [PortfolioController::class, 'contact']);

Route::get('/viewcontact', [AdminController::class, 'contactindex']);
Route::post('/contact', [AdminController::class, 'contactstore']);

Route::middleware("auth")->get('/admin', [AdminController::class, 'index']);
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
Route::post('/about', [AdminController::class,'aboutstore']);
Route::get('/editaboutview/{id}', [AdminController::class,'abouteditview']);
Route::put('/editabout/{id}', [AdminController::class,'aboutedit']);

Route::get('/project', [AdminController::class, 'project']);
Route::get('/addproject', [AdminController::class,'projectview']);
Route::post('/projectform', [AdminController::class,'projectform']);
Route::get('/projecteditview/{id}', [AdminController::class,'projecteditview']);
Route::put('/projectedit/{id}', [AdminController::class,'projectedit']);
Route::delete('/deleteproject/{id}', [AdminController::class,'destroyproject']);


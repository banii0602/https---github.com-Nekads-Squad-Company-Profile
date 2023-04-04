<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TechnologieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'Index']);

//auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

//dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('headers', HeaderController::class)->middleware('auth');
Route::resource('services', ServiceController::class)->middleware('auth');
Route::resource('portfolios', PortfolioController::class)->middleware('auth');
Route::resource('partners', PartnerController::class)->middleware('auth');
Route::resource('technologies', TechnologieController::class)->middleware('auth');
Route::resource('artikels', ArtikelController::class)->middleware('auth');

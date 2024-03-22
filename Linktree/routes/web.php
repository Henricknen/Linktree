<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/{slug}', [PageController::class, 'index']);        // rota sem regra qualquer coisa digitada será redireçiionda para está rota


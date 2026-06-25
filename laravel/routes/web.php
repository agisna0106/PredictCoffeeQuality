<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PredictionController;

Route::get('/', [PredictionController::class, 'index']);

Route::get(
    '/predict',
    [PredictionController::class, 'predictForm']
)->name('predict.form');

Route::post(
    '/predict',
    [PredictionController::class, 'predict']
)->name('predict.store');

Route::get('/about', [PredictionController::class, 'about']);

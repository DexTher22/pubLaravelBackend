<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DrinkController;

// Italok
Route::get('/drinks', [DrinkController::class, 'getDrinks']);

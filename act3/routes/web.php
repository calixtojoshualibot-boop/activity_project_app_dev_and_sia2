<?php

use App\Http\Controllers\CapController;
use Illuminate\Support\Facades\Route;

Route::resource('caps', CapController::class);

// Set the home page to the index list
Route::get('/', [CapController::class, 'index']);
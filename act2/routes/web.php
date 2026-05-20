<?php

use App\Http\Controllers\CapController;
use Illuminate\Support\Facades\Route;

// This makes the list appear at localhost:8000/
Route::get('/', [CapController::class, 'index'])->name('caps.index');

// This makes the detail appear at localhost:8000/1
Route::get('/{id}', [CapController::class, 'show'])->name('caps.show');
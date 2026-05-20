<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CapReservationController;

// Activity 4 Routes
Route::get('/', [CapReservationController::class, 'create'])->name('reservation.create');
Route::post('/reserve', [CapReservationController::class, 'store'])->name('reservation.store');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RandomGambarController;

Route::get('/', [RandomGambarController::class, 'index']);

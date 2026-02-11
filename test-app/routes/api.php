<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// User CRUD API Routes
Route::apiResource('users', UserController::class);

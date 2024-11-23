<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // Correct namespace
use App\Http\Controllers\TestController; // Assuming this is correct for TestController

// Define the route
Route::get('/users', [UserController::class, 'get_users']); // Matches the method name

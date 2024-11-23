<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;

Route::get('/user', [UserController::class, 'get_user']);
   
// [UserController::class, 'get_user']
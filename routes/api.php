<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\TestController;
use App\Http\Controllers\NewsController;


// Route::get('/users', [UserController::class, 'get_users']); 

Route::post('/news', [NewsController::class, 'create_news']);

// Route::middleware('admin')->group(function () {
//     Route::put('/news/{id}', [NewsController::class, 'update']);
//     Route::delete('/news/{id}', [NewsController::class, 'destroy']);


//     Route::post('/articles', [ArticleController::class, 'store']);
//     Route::put('/articles/{id}', [ArticleController::class, 'update']);
//     Route::delete('/articles/{id}', [ArticleController::class, 'destroy']);
// });

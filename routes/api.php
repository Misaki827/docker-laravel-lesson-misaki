<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/health', function () {
    return response()->json([
        'message' => 'API is healthy'
    ]);
});

Route::apiResource('todos', 'App\Http\Controllers\TodoController');

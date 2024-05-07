<?php

use Illuminate\Http\Request;
//  use Illuminate\Support\Facades\Route;

// Route::apiResource('v1/dresses', \App\Http\Controllers\Api\V1\DressesController::class);
// //->middleware('auth:sanctum');

// //Route::post('login', [\App\Http\Controllers\LoginController::class, 'login']);

use Illuminate\Support\Facades\Route;

// Route::prefix('v1')->group(function () {
//     Route::apiResource('dresses', \App\Http\Controllers\Api\V1\DressesController::class);
// });

Route::prefix('v1')->group(function () {
    Route::apiResource('dresses', \App\Http\Controllers\Api\V1\DressesController::class)
        ->only(['index', 'show', 'destroy', 'store', 'update']);
});


Route::prefix('v1')->group(function () {
    Route::apiResource('category', \App\Http\Controllers\Api\V1\CategoryController::class);
});





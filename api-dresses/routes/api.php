<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/dresses', \App\Http\Controllers\Api\V1\DressesController::class);
    //->middleware('auth:sanctum');

//Route::post('login', [\App\Http\Controllers\LoginController::class, 'login']);


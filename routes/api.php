<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymeController;
use App\Http\Controllers\api\CoursController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('payme',[PaymeController::class, 'index']);



Route::get('cours',[CoursController::class, 'index']);
Route::post('mavzu',[CoursController::class, 'mavzu']);

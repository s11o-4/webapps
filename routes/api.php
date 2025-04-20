<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/superheroes', [App\Http\Controllers\SuperheroesController::class, 'index']);
Route::get('/superheroes/{id}', [App\Http\Controllers\SuperheroesController::class, 'show']);

Route::get('/universes', [App\Http\Controllers\UniversesController::class, 'index']);
Route::get('/universes/{id}', [App\Http\Controllers\UniversesController::class, 'show']);

Route::get('/genders', [App\Http\Controllers\GendersController::class, 'index']);
Route::get('/genders/{id}', [App\Http\Controllers\GendersController::class, 'show']);

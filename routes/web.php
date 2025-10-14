<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/categories','index');
    Route::get('/add','create');
    Route::post('/save','store');
    Route::get('/edit/{id}','edit');
    Route::put('/update/{id}','update');
    Route::delete('/remove/{id}','delete');
});
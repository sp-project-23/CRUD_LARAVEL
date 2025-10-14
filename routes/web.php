<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('view',[CategoryController::class,'index']);
Route::get('new',[CategoryController::class,'create']);
Route::get('edit/{id}',[CategoryController::class,'edit']);
Route::get('update/{id}',[CategoryController::class,'update']);
Route::get('delete/{id}',[CategoryController::class,'delete']);
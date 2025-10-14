<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('categories',[CategoryController::class,'index']);
Route::get('add',[CategoryController::class,'create']);
Route::post('save',[CategoryController::class,'store']);
Route::get('edit/{id}',[CategoryController::class,'edit']);
Route::put('update/{id}',[CategoryController::class,'update']);
Route::delete('remove/{id}',[CategoryController::class,'delete']);
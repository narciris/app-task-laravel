<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::get('/login', function (){
    return 'Login';
});

Route::middleware('auth:sanctum')->get('/tasks',[TaskController::class, 'index'])->name('tasks');
Route::middleware('auth:sanctum')->post('/create',[TaskController::class, 'store'])->name('create');
Route::post('/login',[AuthController::class, 'login'])->name('login');
Route::post('register',[AuthController::class, 'register'])->name('register');

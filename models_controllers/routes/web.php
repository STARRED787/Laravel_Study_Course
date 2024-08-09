<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'showData']);
Route::get('/save-data', [UserController::class, 'saveData']);
Route::get('/delete-data', [UserController::class, 'deleteData']);

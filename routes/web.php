<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;



Route::resource('todolist',TodolistController::class);

route::get('/',[TodolistController::class,'index'])->name('root');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

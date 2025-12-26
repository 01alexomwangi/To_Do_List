<?php

use App\Http\Controllers\ToDoListcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('line/', [ToDoListcontroller::class, 'index']);



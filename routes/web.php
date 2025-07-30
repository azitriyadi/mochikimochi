<?php

use App\Http\Controllers\mocicontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('admin.content');
});


Route::get('/login', function () {
    return view('login');
});


Route::get('/dasboard', function () {
    return view('admin.content');
});


Route::get('/moci', [mocicontroller::class, 'index']); 
Route::get('/moci/data', [mocicontroller::class, 'data']);
Route::post('/moci/store', [mocicontroller::class, 'store']); 
Route::get('/moci/{id}', [mocicontroller::class, 'show']); 
Route::post('/moci/{id}', [mocicontroller::class, 'update']); 
Route::delete('/moci/{id}', [mocicontroller::class, 'destroy']);
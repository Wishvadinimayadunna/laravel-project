<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\AdminController1;

Route::get('/', [AdminController::class, 'homepage']);
Route::get('/home', [AdminController::class, 'index'])->name('home');
Route::get('/post_page', [AdminController1::class, 'post_page']);
Route::post('/add_post', [AdminController1::class, 'add_post']);
Route::get('/show_post', [AdminController1::class, 'show_post']);
Route::get('/delete_post/{id}', [AdminController1::class, 'delete_post']);
Route::get('/edit_page/{id}', [AdminController1::class, 'edit_page']);
Route::post('/update_post/{id}', [AdminController1::class, 'update_post']);
Route::get('/create_post', [AdminController1::class, 'create_post']);

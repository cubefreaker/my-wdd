<?php

use App\Http\Livewire\Home;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Home::class);
Route::get('/theme1', \App\Http\Livewire\Theme\Theme1::class);
Route::get('/wisnu/tema1', \App\Http\Livewire\Theme\Wisnu\Tema1::class);
Route::get('/tio/tema1', \App\Http\Livewire\Theme\Tio\Tema1::class);

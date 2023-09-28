<?php

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

Route::get('/', \App\Livewire\Home::class)->name('home');
Route::get('/kelas', \App\Livewire\Classes\All::class)->name('classes.index');
Route::get('/tim', \App\Livewire\Team\All::class)->name('team.index');
Route::get('/kontak', \App\Livewire\Contact::class)->name('contact');

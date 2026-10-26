<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return view('layouts.index');
});


Route::get('/kategori',[KategoriController::class, 'index'])->name
('kategori.index');
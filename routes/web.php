<?php

use App\Http\Controllers\Barang\BarangController;
use App\Http\Controllers\Satuan\SatuanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\Barang\BarangController;
// use App\Http\Controllers\EmployeeController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('profile', ProfileController::class)->name('profile');

// gawe inisisasi barang karo satuan controller e
Route::resource('barang', BarangController::class);
Route::resource('satuan', SatuanController::class);
// Route::put('/employees/{id}', 'EmployeeController@update')->name('employees.update');

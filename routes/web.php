<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PruebaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::view('index', 'index')->name('index');
// Route::view('clinics', 'clinics')->name('clinics');
// Route::view('employees', 'employees')->name('employees');
// Route::view('contact', 'contact')->name('contact');



Route::view('index', 'index')->name('index');
Route::view('clinics', 'clinics')->name('clinics');
Route::view('employees', 'employees')->name('employees');
Route::view('contact', 'contact')->name('contact');
// Route::view('pruebas', 'pruebas', ['posts' => $posts])->name('pruebas');

// Route::get('pruebas', [PruebaController::class, "index"])->name('pruebas');
// pruebas   
Route::get('pruebas', [PruebaController::class, "indexDB"])->name('pruebas');


require __DIR__ . '/auth.php';

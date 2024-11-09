<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/applicant/create', [ProfileController::class, 'create'])->name('applicant.create');
Route::post('/applicant', [ProfileController::class, 'store'])->name('applicant.store');

Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');
Route::get('/profiles/{profile}', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profiles/{profile}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::delete('/profiles/{profile}', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');


require __DIR__.'/auth.php';

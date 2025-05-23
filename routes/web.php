<?php

use App\Http\Controllers\CVController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CVController::class, 'index'])->name('cv');
Route::get('/view-pdf', [CVController::class, 'viewPDF'])->name('cv.view-pdf');
Route::get('/download-pdf', [CVController::class, 'downloadPDF'])->name('cv.download-pdf');

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
*/
//require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/products', function () {
    return view('products');
})->middleware(['auth', 'verified'])->name('products');

Route::get('/orders', function () {
    return view('orders.order-index');
})->middleware(['auth', 'verified'])->name('orders');

/*Route::get('/staff', function () {
    return view('staff.staff-index');
})->middleware(['auth', 'verified'])->name('staff');
*/

// vistas staff
Route::middleware('auth')->group(function () {
    Route::get('/staff', [StaffController::class, 'index'])->name('staff');
    Route::get('/create/staff', [StaffController::class, 'create'])->name('staff.create');
    Route::get('/staff/modified', [StaffController::class, 'edit'])->name('staff.edit');

    Route::post('/create/staff', [StaffController::class, 'store'])->name('staff.store');
    Route::patch('/staff', [StaffController::class, 'update'])->name('staff.update');
    Route::delete('/staff', [StaffController::class, 'destroy'])->name('staff.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

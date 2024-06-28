<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
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
Route::middleware('auth', 'Admin')->group(function () {
    Route::get('/staff', [StaffController::class, 'index'])->name('staff');
    Route::get('/create/staff', [StaffController::class, 'create'])->name('staff.create');
    Route::get('/staff/modified', [StaffController::class, 'edit'])->name('staff.edit');

    Route::post('/create/staff', [StaffController::class, 'store'])->name('staff.store');
    Route::patch('/staff', [StaffController::class, 'update'])->name('staff.update');
    Route::delete('/staff/{user}', [StaffController::class, 'destroy'])->name('staff.destroy');
});

// vistas rol
Route::middleware('auth', 'Admin')->group(function () {
    Route::get('/roles', [RoleController::class, 'index'])->name('rol');
    Route::get('/create/role', [RoleController::class, 'create'])->name('rol.create');
    Route::get('/role/modified', [RoleController::class, 'edit'])->name('rol.edit');

    Route::post('/create/role', [RoleController::class, 'store'])->name('rol.store');
    Route::patch('/role', [RoleController::class, 'update'])->name('rol.update');
    Route::delete('/role/{rol}', [RoleController::class, 'destroy'])->name('rol.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

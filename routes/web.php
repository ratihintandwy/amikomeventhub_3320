<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminEventController;
use App\Http\Controllers\Admin\AdminTransactionController;
use App\Http\Controllers\Admin\AdminCategoryController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman Detail Event (menggunakan ID event)
Route::get('/event/{id}', [EventController::class, 'show'])->name('events.show');

// Halaman Checkout
Route::get('/checkout', [EventController::class, 'checkout'])->name('checkout');

// Halaman Tiket
Route::get('/my-ticket', [TicketController::class, 'index'])->name('ticket');


Route::prefix('admin')->name('admin.')->group(function () {

    // Dashboard Admin
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Manajemen Events
    Route::get('/events', [AdminEventController::class, 'index'])->name('events.index');

    // Manajemen Transactions
    Route::get('/transactions', [AdminTransactionController::class, 'index'])->name('transactions.index');

    // Manajemen Categories (Tugas Pertemuan 3)
    Route::get('/categories', [AdminCategoryController::class, 'index'])->name('categories.index');
});

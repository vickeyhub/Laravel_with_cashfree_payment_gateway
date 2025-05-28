<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CashfreeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CashfreeController::class, 'index']);
Route::post('/cashfree/payments/store', [CashfreeController::class, 'payment'])->name('cashfree.payment');
Route::any('/cashfree/payments/success', [CashfreeController::class, 'success'])->name('cashfree.success');

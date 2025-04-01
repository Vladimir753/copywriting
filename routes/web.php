<?php

use App\Http\Controllers\IsReadController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SubscriptionController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', [IndexController::class, 'index']);

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/get-message', [IsReadController::class, 'index'])->name('get-message');
    Route::get('/chat', [ChatController::class, 'index'])->name('chat');
    Route::post('/chat', [ChatController::class, 'store'])->name('chat.store');
    Route::resource('/templates', TemplateController::class)->names('templates');
    Route::resource('/history', HistoryController::class)->names('history');

    Route::post('/create-checkout-session', [PaymentController::class, 'createCheckoutSession'])->name('checkout.session');
    Route::get('/checkout-success', function () {
        return 'Плащането е успешно!';
    })->name('checkout.success');
    Route::get('/checkout-cancel', function () {
        return 'Плащането е отменено.';
    })->name('checkout.cancel');

    Route::post('/create-subscription-session', [SubscriptionController::class, 'createSubscriptionSession'])->name('subscription.session');
    Route::get('/subscription-success', function () {
        return 'Абонаментът е успешен!';
    })->name('subscription.success');
    Route::get('/subscription-cancel', function () {
        return 'Абонаментът е отказан.';
    })->name('subscription.cancel');
});
Route::post('/stripe/webhook', [SubscriptionController::class, 'handleWebhook']);




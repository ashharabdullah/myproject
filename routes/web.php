<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\NewsController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard Route
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('auth', 'is_admin:admin');

// Resource Routes for Buyers, Sellers, and Products
Route::resource('buyers', BuyerController::class)->middleware('auth');
Route::resource('sellers', SellerController::class)->middleware('auth');
Route::resource('products', ProductController::class)->middleware('auth');

// Frontend Routes
Route::get('/user/page', [FrontendController::class, 'frontend']);
Route::get('frontend/products', [ProductController::class, 'fnproducts'])->name('fnproducts');
Route::get('frontend/sellers', [SellerController::class, 'fnsellers'])->name('fnsellers');
Route::get('frontend/buyers', [BuyerController::class, 'fnbuyers'])->name('fnbuyers');

// News Route
Route::get('/news', [NewsController::class, 'index'])->name('news');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect('/frontend');
    })->middleware(['signed'])->name('verification.verify');



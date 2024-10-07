<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

// Registration and Login Routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard Route 
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('auth', 'is_admin:admin');

// Email Verification Routes
Route::get('/email/verify', function () {
    return view('auth.verify-email'); 
}) ->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    Auth::logout();
    return redirect()->route('login')->with('success', 'Email verified successfully. Please log in.');
}) ->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('status', 'Verification link sent!');
}) ->middleware(['auth', 'throttle:6,1'])->name('verification.send');


// Routes for Buyers, Sellers, and Products
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

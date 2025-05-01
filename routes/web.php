<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LogoutController;

// Public routes that don't require authentication
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Authentication routes
Route::get('/products/login', [ProductController::class, 'login'])->name('products.login');
Route::get('/products/register', [ProductController::class, 'register'])->name('products.register');
Route::post('/products/sendData', [ProductController::class, 'sendData'])->name('products.sendData');
Route::any('/products/loginProcessing', [ProductController::class, 'loginProcessing'])->name('products.loginProcessing');

// Public informational pages
Route::get('/products/about', [ProductController::class, 'about'])->name('products.about');
Route::get('/products/contact', [ProductController::class, 'contact'])->name('products.contact');
Route::get('/products/service', [ProductController::class, 'service'])->name('products.service');
Route::post('/products/contact', [ProductController::class, 'ujumbe'])->name('products.ujumbe');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

// Protected routes - Require authentication
Route::middleware(['auth'])->group(function () {
    // Dashboard route
    Route::get('/dashboard', [ProductController::class, 'dashboard'])->name('products.dashboard');
    
    // Product management routes
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
    
    // Weather related routes
    Route::get('/products/weather', [ProductController::class, 'weather'])->name('products.weather');
    Route::post('/products/mikoa', [ProductController::class, 'mikoa'])->name('products.mikoa');
    Route::get('/products/showWeather', [ProductController::class, 'weather'])->name('products.weather');
    Route::post('/products/getWeather', [ProductController::class, 'getWeather'])->name('products.getWeather');
    
    // Farm management routes
    Route::get('/products/mashamba', [ProductController::class, 'mashamba'])->name('products.mashamba');
    Route::post('/products/storeMashamba', [ProductController::class, 'storeMashamba'])->name('products.storeMashamba');
    Route::post('/products/storeRatiba', [ProductController::class, 'storeRatiba'])->name('products.storeRatiba');
    Route::get('/products/mashamba', [ProductController::class, 'getMashambaData'])->name('products.mashamba');
    
    // Market routes
    Route::get('/products/masoko', [ProductController::class, 'masoko'])->name('products.masoko');
    Route::get('/products/getProducts', [ProductController::class, 'getProducts'])->name('products.getProducts');
    
    // Messaging routes
    Route::post('/products/message', [ProductController::class, 'message'])->name('products.message');
    Route::post('/products/contact', [ProductController::class, 'ujumbe'])->name('products.ujumbe');

    Route::get('products/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/settings', [ProfileController::class, 'settings'])->name('profile.settings');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password.update');
});
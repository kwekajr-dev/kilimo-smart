<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; 

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/login', [ProductController::class, 'login'])->name('products.login');
Route::get('/products/register', [ProductController::class, 'register'])->name('products.register');
Route::post('/products/sendData', [ProductController::class, 'sendData'])->name('products.sendData');
Route::any('/products/loginProcessing', [ProductController::class, 'loginProcessing'])->name('products.loginProcessing');
Route::get('/products/weather', [ProductController::class, 'weather'])->name('products.weather');
Route::post('/products/mikoa', [ProductController::class, 'mikoa'])->name('products.mikoa');
Route::get('/products/showWeather', [ProductController::class, 'weather'])->name('products.weather');
Route::post('.products/getWeather', [ProductController::class, 'getWeather'])->name('products.getWeather');
Route::get('/products/mashamba', [ProductController::class, 'mashamba'])->name('products.mashamba');
Route::post('/products/storeMashamba',[ProductController::class, 'storeMashamba'])->name('products.storeMashamba');
Route::post('/products/storeRatiba', [ProductController::class, 'storeRatiba'])->name('products.storeRatiba');
Route::get('/products/mashamba', [ProductController::class, 'getMashambaData'])->name('products.mashamba');
Route::get('/products/masoko', [ProductController::class, 'masoko'])->name('products.masoko');
Route::get('/products/getProducts', [ProductController::class, 'getProducts'])->name('products.getProducts');
Route::get('/products/about', [ProductController::class, 'about'])->name('products.about');
Route::get('/products/contact', [ProductController::class, 'contact'])->name('products.contact');
Route::get('/products/service', [ProductController::class, 'service'])->name('products.service');
Route::post('/products/message', [ProductController::class, 'message'])->name('products.message');





Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [ProductController::class, 'dashboard'])->name('products.dashboard');
    
});
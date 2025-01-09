<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

// Home page route
Route::get('/', [ProductController::class, 'home'])->name('home');

Route::middleware(['auth'])->group(function () {
    // Show Profile Page
    Route::get('/profile', [UserController::class, 'showProfile'])->name('profile.show');

    // Update Profile
    Route::put('/profile', [UserController::class, 'updateProfile'])->name('users.update');

    // Change Password
    Route::post('/change-password', [UserController::class, 'changePassword'])->name('users.changePassword');
});

// Register routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Login routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Logout route
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Public route to display product details
Route::get('/product/{id}', [ProductController::class, 'show'])->name('products.show');

// Product routes (Resource)
Route::resource('products', ProductController::class)->except(['show']); // Exclude 'show' because it's already defined

// Route for listing all users
Route::get('/users', [UserController::class, 'index'])->name('users');

// Route for showing a single user
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');


// Group routes that require authentication
Route::middleware(['auth'])->group(function () {
    // Display all products (Authenticated route)
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');

    // Add a new product
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');

    // Edit an existing product
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');

    // Update an existing product (using PUT method)
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');

    // Delete a product
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
});

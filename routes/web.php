<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserProductController;



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/redirect', [HomeController::class, 'redirect']);


// index file route 
Route::get('/', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'show']);


// Add Products route 
Route::get('/addproduct', [ProductController::class, 'AddProduct']);
Route::post('/addproduct', [ProductController::class, 'store']);
Route::get('/showproduct', [ProductController::class, 'show']);
Route::get('/editproduct/{id}', [ProductController::class, 'editproduct']);
Route::post('/editproduct/{id}', [ProductController::class, 'updateproduct']);
Route::get('/deleteproduct/{id}', [ProductController::class, 'deleteprod']);

// user register through Admin
Route::get('/user_register', [AdminController::class, 'register']);
Route::post('/user_register', [AdminController::class, 'adduser']);
Route::get('/user_list', [AdminController::class, 'showuser']);
Route::get('/user_update/{id}', [AdminController::class, 'edituser']);
Route::post('/user_update/{id}', [AdminController::class, 'updateuser']);
Route::get('/user_delete/{id}', [AdminController::class, 'deleteuser']);


// User dashbaord route 

Route::get('user-addproduct',[UserProductController::class, 'addproduct']);
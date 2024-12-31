<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('index');
// });

//Auth::routes();

//Authentication
Route::middleware('auth')->group(function(){
    Route::post('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
    //Category
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{category}/update',[CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');


    // Post resource
    Route::resource('/posts', PostController::class)->except(['index','show']);


});

Route::middleware('guest')->group(function(){

    Route::get('/auth/register', [AuthController::class,'register'])->name('register');
    Route::post('/auth/register', [AuthController::class, 'registerUser']);
    Route::get('auth/login', [AuthController::class,'login'])->name('login');
    Route::post('/auth/login', [AuthController::class, 'loginUser']);
});

Route::resource('/posts', PostController::class)->only(['index','show']);

// Category


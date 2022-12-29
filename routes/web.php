<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class , 'showWelcomePage']);

Route::get('/signin',[AuthController::class , 'showSignInPage']);
Route::post('/signin',[AuthController::class , 'login']);

Route::get('/signup',[AuthController::class , 'showSignUpPage']);
Route::post('/signup',[UserController::class , 'addUser']);

Route::middleware(['LoggedCheck'])->group(function () {
    Route::get('/home',[ProductController::class , 'showAllProducts']);

    Route::get('/search',[HomeController::class , 'showSearchPage']);

    Route::middleware(['UserCheck'])->group(function () {
        Route::get('/cart',[HomeController::class , 'showCartPage']);
        Route::get('/history',[HomeController::class , 'showHistoryPage']);
    });

    Route::get('/profile',[UserController::class , 'showProfilePage']);
    Route::post('/profile',[AuthController::class , 'login']);

    Route::get('/profile/edit-profile',[UserController::class , 'showEditProfilePage']);
    Route::post('/profile/edit-profile',[UserController::class , 'updateProfile']);

    Route::get('/profile/edit-password',[UserController::class , 'showEditPasswordPage']);
    Route::post('/profile/edit-password',[UserController::class , 'updatePassword']);

    Route::middleware(['AdminCheck'])->group(function () {
        Route::get('/add', [ProductController::class, 'showAddPage']);
        Route::post('/add', [ProductController::class, 'addProduct']);
    });

    Route::get('/logout', [AuthController::class, 'logout']);
});





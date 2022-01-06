<?php

use App\Http\Controllers\manager\ManageKeyboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\shop\ShowKeyboardController;
use App\Http\Controllers\shop\CheckoutController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionDetailController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\searchController;
use GuzzleHttp\Middleware;

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
//user or guest
Route::get('/', [HomePageController::class, 'index']);
Route::get('/view-keyboard/{id}', [ShowKeyboardController::class, 'index']);
Route::get('/view-keyboard/detail/{id}', [ShowKeyboardController::class, 'viewDetail']);
Route::get('/search/{id}',[ShowKeyboardController::class, 'searchPro'])->name('search');
Route::get('/change-password',[UserController::class, 'change_pass_page']);
Route::put('/update/password/user/{id}',[UserController::class, 'update_pass']);
//user
Route::get('/view-transaction-history', [TransactionController::class, 'index']);
Route::get('/view-transaction-detail-history/{id}', [TransactionDetailController::class, 'index']);

//cart
Route::get('/cart-index',[CartController::class, 'index']);
Route::post('/cart/store', [CartController::class, 'store']);
Route::put('/update-quantity/{id}',[CartController::class, 'updateQuantity']);
Route::post('/checkout', [CheckoutController::class, 'store']);

//Manager - Store Kyeboard
Route::get('/add_keyboard', [ManageKeyboardController::class, 'index'])->middleware('admin');
Route::post('/add_keyboard/store' , [ManageKeyboardController::class,'store'])->middleware('admin');
Route::delete('/delete/keyboard/{id}',[ManageKeyboardController::class,'delete'])->middleware('admin');
Route::get('/update/keyboard/{id}',[ManageKeyboardController::class,'update_page'])->middleware('admin');
Route::put('/update/{id}', [ManageKeyboardController::class,'update'])->middleware('admin');

Route::get('/update/category-keyboard/{id}', [CategoryController::class, 'update_page'])->middleware('admin');
Route::put('/update/category/{id}',[CategoryController::class,'update'])->middleware('admin');
Route::delete('/delete/category-keyboard/{id}', [CategoryController::class, 'delete'])->middleware('admin');
//route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'index']);
Auth::routes();
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CartController;

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
//TODO::Страница корзины, и остальные мелкие страницы с текстом(Помощь, О компании и тд)
Route::get('/', HomeController::class)->name('home');
Route::get('/category/{category}', CategoryController::class)->name('category');
Route::get('/category/{category}/{sub_category}', SubCategoryController::class)->name('subcategory');

Route::get('/login', [LoginController::class, 'show'])->name('log_p');
Route::get('/register', [RegisterController::class, 'show'])->name('reg_p');

Route::post('/login', [LoginController::class, 'store'])->name('log_s');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/register/store', [RegisterController::class, 'store'])->name('reg_s');
Route::get('/item/{item}', [ItemController::class, 'show'])->name('item');

Route::middleware(['auth'])->group(function () {
    Route::post('/cart/change/amount', [CartController::class, 'change_amount'])->name('change_amount');
    Route::get('/cart', CartController::class)->name('cart');
    Route::post('cart/add/{item}', [ItemController::class, 'addToCart'])->name('add_to_cart');
});

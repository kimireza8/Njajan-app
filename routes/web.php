<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController; // Import namespace CheckoutController

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\ProductController;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/checkout/{user}', [CheckoutController::class, 'checkout']);

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::prefix('shop')->group(function () {
    Route::get('/', 'ShopController@index');
});

<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products', [App\Http\Controllers\FrontendController::class, 'allProducts']);
// Route::get('/{vue_capture?}', function () {
//     return view('front');
// })->where('vue_capture', '[\/\w\.-]*');
Route::resource('cart', CartController::class);

Route::get('{slug}', function () {
    return view('front');
});

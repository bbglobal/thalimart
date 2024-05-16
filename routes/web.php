<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::controller(IndexController::class)->group(function () {
    Route::get('/',  'home')->name('home');
    Route::get('/about',  'about')->name('about');
    Route::get('/contact',  'contact')->name('contact');
    Route::get('/faq',  'faq')->name('faq');
    Route::get('/shipping-policy',  'shippingPolicy')->name('shipping.policy');
    Route::get('/return-policy',  'returnPolicy')->name('return.policy');
    Route::get('/terms-of-use',  'temsOfUse')->name('terms.use');
    Route::get('/privacy-policy',  'privacyPolicy')->name('privacy.policy');
    Route::get('/testimonials',  'testimonials')->name('testimonials');
    Route::get('/our-quality',  'quality')->name('quality');
    Route::get('/product-category/{category}',  'whitePlate')->name('categories');
    Route::get('/product-details/{id}',  'productDetails')->name('product.detail');
    Route::get('/cart',  'viewCart')->name('product.cart');
    Route::post('/add-to-cart/{productId}', 'addToCart')->name('cart.add');
    Route::post('/remove-from-cart/{itemId}', 'removeFromCart')->name('cart.remove');
    Route::post('/update-cart', 'updateCart')->name('cart.update');
    Route::get('/checkout', 'checkout')->name('checkout'); 
}); 

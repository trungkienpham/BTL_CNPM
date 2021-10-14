<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('Pages/Home');
});
Route::get('/product', function () {
    return view('Pages/Product');
});
Route::get('/block', function () {
    return view('Pages/Block');
});
Route::get('/checkout', function () {
    return view('Pages/Checkout');
});
Route::get('/detail', function () {
    return view('Pages/Detail');
});
Route::get('/contact', function () {
    return view('Pages/Contact');
});
Route::get('/faq', function () {
    return view('Pages/FAQ');
});
Route::get('/mywishlist', function () {
    return view('Pages/MyWishlist');
});
Route::get('/singin', function () {
    return view('Pages/Singin');
});
Route::get('/shoppingcart', function () {
    return view('Pages/ShoppingCart');
});
Route::get('/terms&conditions', function () {
    return view('Pages/Terms&Conditions');
});
Route::get('/trackorders', function () {
    return view('Pages/TrackOrders');
});
Route::get('/404', function () {
    return view('Pages/404');
});
Route::get('/block/blockdetail', function () {
    return view('Pages/BlockDetail');
});
Route::get('productcomparison', function () {
    return view('Pages/ProductComparison');
});


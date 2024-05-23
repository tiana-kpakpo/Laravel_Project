<?php 

use Illuminate\Support\Facades\Route;


Route::get('/products', function(){
    return 'products';
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
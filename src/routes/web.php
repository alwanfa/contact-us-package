<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Wandev\Contact\Http\Controllers\ContactController;

Route::group(['namespace'=>'Wandev\Contact\Http\Controllers'], function(){
    Route::get('contact',[ContactController::class, 'display'])->name('contact');
    Route::post('contact',[ContactController::class, 'store']);
});


<?php

use Illuminate\Support\Facades\Route;

Route::get('register', function(){
    return view('auth.register');
})->name('register');
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

Route::get('/',function(){return view('backend.admin.dashboard');})->name('admin.dashboard');
Route::get('/abc',function(){return view('backend.admin.dashboard');})->name('admin.sellers');
Route::get('/abcd',function(){ return view('backend.admin.seller.index'); })->name('admin.buyers');
//require_once "admin.php";
//require_once "front.php";
//require_once "backend.php";
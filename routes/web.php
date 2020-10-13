<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
//Route::get('register', function(){
//    return view('auth.register');
//})->name('register');
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

//Route::get('/',function(){return view('backend.admin.dashboard');})->name('admin.dashboard');
//Route::get('/abc',function(){return view('backend.admin.dashboard');})->name('admin.sellers');
//Route::get('/abcd',function(){ return view('backend.admin.seller.index'); })->name('admin.buyers');
//require_once "front.php";
//require_once "backend.php";
include_once "admin.php";
=======
use App\Http\Controllers\RolesController;
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

// Route::get('/', function () {
//     return view('backend.admin.dashboard');
// });
Route::get('/users', function () {
    return view('backend.admin.dashboard');
})->name('users');

Route::get('register', function(){
    return view('auth.register');
})->name('register');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
require_once "admin.php";
require_once "front.php";
require_once "backend.php";
Route::get('/roles',[RolesController::class,'role']);
>>>>>>> ghulam_ali

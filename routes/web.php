<?php
use App\Http\Controllers\ChatsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolesController;

Route::get('/', function(){
    return view('frontend.home');
});

        Route::get('register', function () {
            return view('auth.register');
        })->name('register');

        Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::get('/roles', [RolesController::class, 'role']);

        Route::get('/chat', [ChatsController::class, 'index']);
        Route::get('messages', [ChatsController::class, 'fetchMessages']);
        Route::post('messages', [ChatsController::class, 'sendMessage']);

require_once "admin.php";
require_once "front.php";
require_once "backend.php";



<?php
use App\Http\Controllers\ChatsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolesController;
<<<<<<< HEAD
=======
use App\Http\Controllers\ReviewController;
Route::get('register', function(){
    return view('auth.register');
})->name('register');
>>>>>>> ghulam_ali

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

Route::get('/roles',[RolesController::class,'role']);
Route::post('/review',[ReviewController::class,'reviews'])->name('review');
Route::get('/all_review',[ReviewController::class,'review_show'])->name('review_show');
Route::get('review/form',function(){
        return view('backend/admin/buyer/review');
});

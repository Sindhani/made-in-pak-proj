<?php


use App\Http\Controllers\Admin\BuyerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SaleDashboardController;
use App\Http\Controllers\Admin\SellerController;

Route::group(['prefix'=>'admin', 'as' => 'admin.'],function(){
    Route::resource('sellers', SellerController::class);
    Route::resource('buyers', BuyerController::class);
    Route::resource('dashboard', DashboardController::class);
    Route::resource('sales', SaleDashboardController::class);
});



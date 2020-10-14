<?php


use App\Http\Controllers\Admin\AssignRoleAndPermissionController;
use App\Http\Controllers\Admin\BuyerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\SaleDashboardController;
use App\Http\Controllers\Admin\SellerController;
use App\Http\Controllers\Admin\RoleController;

Route::group(['prefix'=>'admin', 'as' => 'admin.'],function(){
    Route::resource('sellers', SellerController::class);
    Route::resource('buyers', BuyerController::class);
    Route::resource('dashboard', DashboardController::class);
    Route::resource('sales', SaleDashboardController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('assign-roles-and-permissions', AssignRoleAndPermissionController::class);
});



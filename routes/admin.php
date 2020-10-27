<?php


use App\Http\Controllers\Admin\AssignRoleAndPermissionController;
use App\Http\Controllers\Admin\BuyerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SaleDashboardController;
use App\Http\Controllers\Admin\SellerController;
<<<<<<< HEAD
use App\Http\Controllers\Admin\CategoriesController;
=======
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\TagController;

>>>>>>> refs/remotes/origin/master

Route::group(['prefix'=>'admin', 'as' => 'admin.'],function(){
    Route::resource('sellers', SellerController::class);
    Route::resource('buyers', BuyerController::class);
    Route::resource('dashboard', DashboardController::class);
    Route::resource('sales', SaleDashboardController::class);
<<<<<<< HEAD
    Route::resource('categories', CategoriesController::class);
=======
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('assign-roles-and-permissions', AssignRoleAndPermissionController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('subcategory', SubCategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('tag',TagController::class);
>>>>>>> refs/remotes/origin/master
});



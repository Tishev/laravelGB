<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::resource('catedories', AdminCategoryController::class);
    Route::resource('news', AdminNewsController::class);
});
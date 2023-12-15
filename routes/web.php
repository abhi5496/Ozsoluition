<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddonController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix'=>'addon'],function(){
    Route::get('viewAddon',[AddonController::class,'index'])->name('viewAddon');
    Route::post('addAddon',[AddonController::class,'addAddon'])->name('addAddon');
    Route::get('delete-addon\{id}',[AddonController::class,'deleteAddon'])->name('delete-addon');
    Route::view('add-addon','addon.addAddon');

});

Route::group(['prefix'=>'product'],function(){
    Route::get('viewProduct',[ProductController::class,'index'])->name('viewProduct');
    Route::post('addProduct',[ProductController::class,'addProduct'])->name('addProduct');
    Route::get('delete-product\{id}',[ProductController::class,'deleteProduct'])->name('delete-product');
    Route::view('add-product','product.addProduct');
});
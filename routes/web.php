<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AboutUsController;
// use App\Http\Controllers\TeamController;
// use App\Http\Controllers\FaqController;
// use App\Http\Controllers\PricingController;

use App\Http\Controllers\ServicesController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BlogController;

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\CheckoutController;

use App\Http\Controllers\ContactController;
// use App\Http\Controllers\LoginController;
// use App\Http\Controllers\RegisterController;

use App\Http\Controllers\Admin\ProductsAdminController;




Route::get('/',[HomeController::class,'index']);

Route::get('/about-us',[AboutUsController::class,'index']);
Route::get('/team',[TeamController::class,'index']);
Route::get('/faq',[FaqController::class,'index']);
Route::get('/pricing',[PricingController::class,'index']);

Route::get('/services',[ServicesController::class,'index']);
Route::get('/service-detail',[ServicesController::class,'serviceDetail']);

Route::get('/gallery',[GalleryController::class,'index']);

Route::get('/blog',[BlogController::class,'index']);
Route::get('/blog-detail',[BlogController::class,'blogDetail']);

Route::get('/products',[ProductsController::class,'index']);
Route::get('/products-detail',[ProductsController::class,'productDetail']);
Route::get('/shopping-cart',[ShoppingCartController::class,'index']);
Route::get('/checkout',[CheckoutController::class,'index']);

Route::get('/contact-us',[ContactController::class,'index']);
Route::post('/contact-form-submit', [ContactController::class, 'submitContactForm']);
Route::get('/login',[LoginController::class,'index']);
Route::get('/register',[RegisterController::class,'index']);




Route::get('admin', [AdminAuthController::class, 'getLogin']);


Route::group(['prefix' => 'admin'], function () {

    Route::get('logout', [AdminAuthController::class, 'logout'])->name('adminLogout');

    Route::group(['middleware' => ['adminauth']], function () {
        Route::get('login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
        Route::post('login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
    });

    Route::group(['middleware' => ['adminAfterLogin']], function () {
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

        Route::model('Products', 'App\Models\Products');
        Route::resource('products', 'App\Http\Controllers\Admin\ProductsAdminController');
        Route::post('products/get-list', [ProductsAdminController::class, 'products_list_ajax']);
        Route::get('products/delete/{id}', [ProductsAdminController::class, 'destroy']);
    });


});

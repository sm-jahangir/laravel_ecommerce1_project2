<?php

use Illuminate\Support\Facades\Route;
// Frontend Controller
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductDetailsController;
use App\Http\Controllers\frontend\CartController;

// Backend Controller
use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ProductsController;
use App\Http\Controllers\backend\SliderController;

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

/*
|       Frontend Route
| =========================
*/
Route::get('/', [HomeController::class, 'index']); //FRONTEND HOME ROUTE
Route::get('/product_by_cat_home/{id}', [HomeController::class, 'show_by_cat_home']);
Route::get('/product_by_brand_home/{id}', [HomeController::class, 'show_by_brand_home']);
// Route::get('/shop/shop', '');
Route::get('/shop/shop', [ProductDetailsController::class, 'shop']);
Route::get('/shop/product-details/{product_id}',[ProductDetailsController::class, 'index']);




Route::post('/shop/add-to-cart', [CartController::class, 'add_to_cart']);








Route::get('/shop/show-cart', [CartController::class, 'show_cart']);


Route::view('/blog', 'frontend/blog');
Route::view('/blog-single', 'frontend/blog-single');
// Route::view('/cart', 'frontend/cart');
Route::view('/checkout', 'frontend/checkout');
Route::view('/contact-us', 'frontend/contact-us');
Route::view('/login', 'frontend/login');
Route::view('/404', 'frontend/404');
Route::view('/product-details', 'frontend/product-details');







/*
|       Backend Route
| =========================
*/
Route::get('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/login/Submit', [AuthController::class, 'submit']);
Route::get('/admin/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => ['logincheck']], function () {

    Route::get('admin/dashboard', [AdminController::class, 'dashboard']);

    // BACKEND MAIN SLIDER
    Route::get('admin/slider/list', [SliderController::class, 'index']);
    Route::view('admin/slider/add', 'backend/mainslider/add');
    Route::post('admin/slider/add/Submit', [SliderController::class, 'submit']);
    Route::get('admin/slider/unactive/{slider_id}', [SliderController::class, 'unactive']);
    Route::get('admin/slider/active/{slider_id}', [SliderController::class, 'active']);
    Route::get('admin/slider/edit/{slider_id}', [SliderController::class, 'edit']);
    Route::post('admin/slider/edit/Update/{slider_id}', [SliderController::class, 'update']);
    Route::get('admin/slider/delete/{slider_id}', [SliderController::class, 'delete']);

    // BACKEND CATEGORY
    Route::view('admin/category/add', 'backend/category/add');
    Route::post('admin/category/add/Submit', [CategoryController::class, 'submit']);
    Route::get('admin/category/list', [CategoryController::class, 'list']);
    Route::get('admin/category/unactive/{id}', [CategoryController::class, 'unactive']);
    Route::get('admin/category/active/{id}', [CategoryController::class, 'active']);
    Route::get('admin/category/edit/{id}', [CategoryController::class, 'edit']);
    Route::post('/admin/category/update/Submit/{id}', [CategoryController::class, 'update']);
    Route::get('/admin/category/delete/{id}', [CategoryController::class, 'delete']);

    // BACKEND BRAND
    Route::view('admin/brand/add', 'backend/brand/add');
    Route::post('admin/brand/add/Submit', [BrandController::class, 'submit']);
    Route::get('admin/brand/list', [BrandController::class, 'list']);
    Route::get('/admin/brand/active/{id}', [BrandController::class, 'active']);
    Route::get('/admin/brand/unactive/{id}', [BrandController::class, 'unactive']);
    Route::get('/admin/brand/edit/{id}', [BrandController::class, 'edit']);
    Route::post('/admin/brand/update/Submit/{id}', [BrandController::class, 'update']);
    Route::get('/admin/brand/delete/{id}', [BrandController::class, 'delete']);

    // BACKEND PRODUCT
    Route::view('/admin/product/add', 'backend/products/add');
    Route::post('/admin/product/add/Submit', [ProductsController::class, 'submit']);
    Route::get('admin/products/list', [ProductsController::class, 'listing']);
    Route::get('admin/product/unactive/{product_id}', [ProductsController::class, 'unactive']);
    Route::get('admin/product/active/{product_id}', [ProductsController::class, 'active']);
    Route::get('admin/product/delete/{product_id}', [ProductsController::class, 'delete']);
    Route::get('/admin/product/edit/{product_id}', [ProductsController::class, 'edit']);
    Route::post('admin/product/edit/Update/{product_id}', [ProductsController::class, 'update']);
});

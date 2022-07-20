<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;

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

// Welcome Page
Route::get('/',[HomeController::class,'index']);

// Show Login Form
Route::get('/login',[UserController::class,'login'])->name('login');

// Show Register Form
Route::get('/register',[UserController::class,'create']);

// User Registration
Route::post('/users',[UserController::class,'store']);

// User Log In
Route::post('/users/authenticate',[UserController::class,'authenticate']);

// User Log Out
Route::get('/logout',[UserController::class,'logout']);

// Show Shopping Cart
Route::get('/products/shopping_cart',[CartController::class,'index']);

// Add To Cart
Route::post('/products/shopping_cart',[CartController::class,'store']);

// Show All Equipment
Route::get('/products/equipment',[ProductController::class,'equipment']);

// Show All Games
Route::get('/products/games',[ProductController::class,'games']);

// Show All News
Route::get('/news/index',[NewsController::class,'index']);

// Show About Us 
Route::get('/about-us',[HomeController::class,'about']);

// Show All Blogs
Route::get('/blogs/index',[BlogsController::class,'index']);

// Show All Services
Route::get('/services/index',[ServiceController::class,'index']);

// Show Create Blog Form
Route::get('/blogs/create',[BlogsController::class,'create'])->middleware('auth');

// Show All Equipment - Admin Panel
Route::get('/admin-panel/equipment',[AdminController::class,'equipment'])->middleware(['admin']);

// Show All Games - Admin Panel
Route::get('/admin-panel/games',[AdminController::class,'games'])->middleware('admin');

// Show All Services - Admin Panel 
Route::get('/admin-panel/service',[ServiceController::class,'services'])->middleware('admin');

// Show Create Equipment Form
Route::get('/admin-panel/create_equipment',[AdminController::class,'create_equipment'])->middleware(['admin']);

// Show Create Game Form
Route::get('/admin-panel/create_game',[AdminController::class,'create_game'])->middleware(['admin']);

// Show Create Service Form
Route::get('/admin-panel/create_service',[ServiceController::class,'create'])->middleware('admin');

// Show Edit Form for Products
Route::get('/admin-panel/product/{product}/edit',[AdminController::class,'edit'])->middleware(['admin']);

// Show Edit Form for Services
Route::get('/admin-panel/service/{service}/edit',[ServiceController::class,'edit'])->middleware(['admin']);

// Show Edit Form for Blogs
Route::get('/blogs/{blog}/edit',[BlogsController::class,'edit'])->middleware('auth');

// Show Edit Form for Comments
Route::get('/blogs/comment/{comment}/edit',[CommentController::class,'edit'])->middleware('auth');

// Store Equipment 
Route::post('/admin-panel/store_equipment',[AdminController::class,'store_equipment'])->middleware(['admin']);

// Store Game 
Route::post('/admin-panel/store_game',[AdminController::class,'store_game'])->middleware(['admin']);

// Store Service 
Route::post('/admin-panel/store_service',[ServiceController::class,'store'])->middleware('admin');

// Store Blog
Route::post('/blogs/store',[BlogsController::class,'store'])->middleware('auth');

// Store Comment
Route::post('/blogs/post',[CommentController::class,'store'])->middleware('auth');

// Update Product
Route::put('/admin-panel/{product}',[AdminController::class,'update'])->middleware('admin');

// Update Blog
Route::put('/blogs/{blog}',[BlogsController::class,'update'])->middleware('auth');

// Delete Service
Route::delete('/admin-panel/service/{service}',[ServiceController::class,'destroy'])->middleware('admin');

// Delete Product
Route::delete('/admin-panel/product/{product}',[AdminController::class,'destroy'])->middleware('admin');

// Delete Blog
Route::get('/blogs/{blog}/delete',[BlogsController::class,'destroy'])->middleware('auth');

// Delete Comment
Route::get('/blogs/{comment}/remove',[CommentController::class,'destroy'])->middleware('auth');

// Show Single Service
Route::get('/services/{service}',[ServiceController::class,'show']);

// Show Single Blog
Route::get('/blogs/{blog}',[BlogsController::class,'show']);

// Show Single News
Route::get('/news/{news}',[NewsController::class,'show']);

// Show Single Product
Route::get('/products/{product}',[ProductController::class,'show']);

// Error Page
Route::fallback(function(){
    return view('404');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify'=>false,
    'login'=>false
]);



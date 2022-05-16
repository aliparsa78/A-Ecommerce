<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;


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

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';

Route::get('/home',[HomeController::class,'index']);

Route::middleware(['auth','admin'])->group(function(){
    // Admin part start here
    Route::get('/dashboard', [AdminController::class,'index'])->name("dashboard");
    Route::get('/admins',[AdminController::class,'admin'])->name('admin');
    Route::view('/add-admin','Admin.admin.admin-form');
    Route::post('/admin-regester',[AdminController::class,'admin_regester']);
    Route::get('/user',[UserController::class,'user']);
    Route::get('/remove-user/{id}',[UserController::class,'remove_user']);
    Route::get('/update-user/{id}',[UserController::class,'update_user']);
    Route::post('/user_update/{id}',[UserController::class,'update']);
    Route::get('/admin_setting',[AdminController::class,'admin_setting']);
    Route::post('/change-email',[AdminController::class,'change_email']);
    Route::get('/change_password',[AdminController::class,'change_password']);
    Route::post('/update_pass/{id}',[AdminController::class,'update_pass']);
    Route::post('/profile/{id}',[AdminController::class,'profile']);
    
    // Products Part start here
    Route::get('/category',[CategoryController::class,'index'])->name('category');
    Route::view('/add_category','Admin.Category.add');
    Route::post('/add_category',[CategoryController::class,'add']);
});
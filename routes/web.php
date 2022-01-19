<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Admin\AdminLoginController;

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
Route::get('/index',[IndexController::class,'index'])->name('index');

Route::prefix('/admin')->group(function(){
    //Admin Login
    Route::match(['get','post'],'/login',[AdminLoginController::class,'adminLogin'])->name('adminLogin');
    Route::group(['middleware' =>['admin']],function(){
        //Admin Dashboard
        Route::get('/dashboard',[AdminLoginController::class,'adminDashboard'])->name('adminDashboard');
    });
    
    



});

Route::get('/admin/logout',[AdminLoginController::class,'adminLogout'])->name('adminLogout');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\backend\CatagoryController;
use App\Http\Controllers\backend\SubcatagoryController;

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('/');
// });
Route::get('/',[AdminController::class,'frontindex']);
Route::get('/admin/login',[AdminController::class,'adminLogin']);
Route::post('/admin/dashboardhere',[AdminController::class,'adminDashboardhere']);
Route::get('/admin/dashboardherea',[AdminController::class,'adminDashboardherea']);
Route::get('/catagory/create',[CatagoryController::class,'catagoryCreate']);
Route::post('/catagory/store',[CatagoryController::class,'catagoryStore']);
Route::get('/catagory/manage',[CatagoryController::class,'catagoryManage']);
Route::get('/catagory/edit/{id}',[CatagoryController::class,'catagoryEdit']);
Route::post('/catagory/update/{id}',[CatagoryController::class,'catagoryUpdate']);
Route::get('/catagory/delete/{id}',[CatagoryController::class,'catagoryDelete']);

//subcatagory Start
Route::get('/subcatagory/create',[SubcatagoryController::class,'subcatagoryCreate']);
Route::post('/subcatagory/store',[SubcatagoryController::class,'subcatagoryStore']);
Route::get('/subcatagory/manage',[SubcatagoryController::class,'subcatagoryManage']);
Route::get('/subcatagory/delete/{id}',[SubcatagoryController::class,'subcatagoryDelete']);
Route::get('/subcatagory/edit/{id}',[SubcatagoryController::class,'subcatagoryEdit']);
Route::post('/subcatagory/update/{id}',[SubcatagoryController::class,'subcatagoryUpdate']);

Route::middleware(['auth'])->group(function () {
    // আপনার মিডলওয়্যারের সাথে আপনার রুট যুক্ত করুন

});

// Route::get('/',[LoginController::class,'logins']);
Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

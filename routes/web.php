<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DonorController;


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
Route::get('/', [PagesController::class,'home'])->name('home');


//login routes
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
Route::get('/admin/logout',[LoginController::class,'logout'])->name('logout');

//admin dashboard routes
Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->middleware('adminvalidation')->name('admin.dashboard');
Route::get('/admin/Update Profile',[AdminController::class,'updateadmin'])->middleware('adminvalidation')->name('update.admin');
Route::post('/admin/Update Profile',[AdminController::class,'updateadminsubmit'])->name('update.admin');
Route::get('/admin/add user',[AdminController::class,'adduser'])->middleware('adminvalidation')->name('user.create');
Route::post('/admin/add user',[AdminController::class,'register'])->name('user.create');
Route::get('/admin/user list',[AdminController::class,'userlist'])->middleware('adminvalidation')->name('user.list');
Route::get('/admin/useredit/{id}',[AdminController::class,'edituser'])->middleware('adminvalidation')->name('user.edit');
Route::post('/admin/useredit',[AdminController::class,'updateuser'])->name('user.edit');
Route::get('/admin/userdetail/{id}',[AdminController::class,'userdetail'])->middleware('adminvalidation')->name('user.detail');
Route::get('/admin/userdelete/{id}',[AdminController::class,'userdelete'])->name('user.delete');
Route::get('/admin/Donors',[DonorController::class,'donors'])->middleware('adminvalidation')->name('all.donorlist');

//project routes
Route::get('/admin/project list',[ProjectController::class,'projectlist'])->middleware('adminvalidation')->name('project.list');
Route::get('/admin/Donation Details/{id}',[ProjectController::class,'donationdetails'])->middleware('adminvalidation')->name('donation.details');
Route::get('/admin/Donations/{id}',[ProjectController::class,'alldonations'])->middleware('adminvalidation')->name('all.donations');
Route::get('/admin/Fund/{id}',[ProjectController::class,'fund'])->middleware('adminvalidation')->name('total.fund');
Route::get('/admin/Donor List/{id}',[ProjectController::class,'donorlist'])->middleware('adminvalidation')->name('donor.list');
Route::get('/admin/ProjectStatus/{id}',[ProjectController::class,'changestatus'])->middleware('adminvalidation')->name('project.changestatus');
Route::post('/admin/ProjectStatus/',[ProjectController::class,'status'])->middleware('adminvalidation')->name('project.changestatus');





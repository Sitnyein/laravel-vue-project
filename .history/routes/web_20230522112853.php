<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;

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

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'
])->group(function () {
    Route::get('/dashboard',[ProfileController::class,'profile'])->name('admin#profile');
    //acc update
    Route::post('admin/update',[ProfileController::class,'adminupdate'])->name('admin#update');

    //show password page
    Route::get('admin/password',[ProfileController::class,'passwordpage'])->name('password#page');
    Route::post('password/update',[ProfileController::class,'Changepassword'])->name('password#change');

    //admin list
    Route::get('adminlist',[ListController::class,'adminlist'])->name('admin#list');
    //admin search
    // Route::get('adminsearch',[ListController::class,'searchlist'])->name('admin#search');

    //admin list delete
    Route::get('admindelete/{id}',[ListController::class,'admindelete'])->name('admin#delete');

    Route::get('category',[CategoryController::class,'category'])->name('category#page');
    Route::post('category',[CategoryController::class,'categorycreate'])->name('category#create');
  //category delete
    Route::get('categorydelete/{id}',[CategoryController::class,'categorydelete'])->name('category#delete');
  //category search
    Route::get('category/search',[CategoryController::class,'categorysearch'])->name('category#search');
   //category edit page
    Route::get('category/edit/{id}',[CategoryController::class,'categoryedit'])->name('category#edit');
   //category update
   Route::post('category/update{id}',[CategoryController::class,'categoryupdate'])->name('category#update');
   //post create page
   Route::get('postpage',[PostController::class,'postpage'])->name('post#page');
   //post create made
   Route::post('postcreate',[PostController::class,'postcreate'])->name('post#create');
   //delete
   Route::get('postdelete/{id}',[PostController::class,'postdelete'])->name('post#delete');
   //edit
   Route::get('postedit/{id}',[PostController::class,'postedit'])->name('post#edit');
   Route::post('postupdate/{id}',[PostController::class,'postupdate'])->name('post#update');
   //trend post
   Route::get('trendpost',[TrendpostController::class,'trendpost'])->name('trend#post');

});

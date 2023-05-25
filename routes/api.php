<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\ActionlogController;
use App\Http\Controllers\Api\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

  Route::post('user/login',[AuthController::class,'login']);
  Route::post('user/register',[AuthController::class,'register']);


 //get data from category
   Route::get('category',[AuthController::class,'category'])->middleware('auth:sanctum');

 //get data from post
  Route::get('allpost',[PostController::class,'allpost']);
//get data from category
  Route::get('allcategory',[CategoryController::class,'allcategory']);
//search data from  post
  Route::post('searchpost',[PostController::class,'search']);
  Route::post('post/detail',[PostController::class,'postdetail']);
//search data from category
  Route::post('search',[CategoryController::class,'searchcategory']);
  //actilog who see
  Route::post('actionlog',[ActionlogController::class,'action']);

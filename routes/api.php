<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ContentController;
use App\Http\Controllers\Api\FileController;
use App\Http\Controllers\Api\ShowController;
use App\Http\Controllers\Api\SubCategoryController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::get('/user', function (Request $request) {
//     // return $request->user();
//     return response()->json('555');
// });

Route::resource('user', UserController::class);
Route::resource('category', CategoryController::class);
Route::resource('sub-category', SubCategoryController::class);
// Route::resource('content', ContentController::class);
Route::post('upload-image', [FileController::class,'uploadImg']);
Route::post('upload-file', [FileController::class,'uploadFile']);

// Show
Route::get('cont-new-home',[ShowController::class,'ShowNew']);
Route::get('cont-img-new-home',[ShowController::class,'ShowImgNew']);
// Route::get('getAllCate',[ShowController::class,'ShowCateMageUser']);



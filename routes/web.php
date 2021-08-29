<?php

use App\Http\Controllers\Api\ContentController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/auth-user', function () {
    return response()->json(Auth::user());
});


Route::get('/user', function () {
    return view('pages.admin.user.manage-user');
});
Route::get('/user-create', function () {
    return view('pages.admin.user.create-user');
});
Route::get('/content-create', function () {
    return view('pages.content.create-content');
});
Route::get('/manage-content', function () {
    return view('pages.content.manage-content');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/delete-content/{id_content}', [ContentController::class, 'destroy']);
Route::get('/edit-content', [ContentController::class, 'edit']);

Route::get('/detail-content', [DetailController::class, 'show_detail']);

Route::get('/manage-category', function () {
    return view('pages.admin.category.manage-category');
});

Route::post('/content', [ContentController::class, 'store']);
Route::post('/update-content/{id_content}', [ContentController::class, 'update']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\Api\ContentController;
use App\Http\Controllers\Api\UserController;

use App\Http\Controllers\DetailController;
use App\Http\Controllers\ForgotCustom;
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

Route::get('forgett-password', [ForgotCustom::class, 'showForgetPasswordForm']);
Route::post('forgett-password', [ForgotCustom::class, 'submitForgetPasswordForm']);
Route::get('reset-password/{token}', [ForgotCustom::class, 'showResetPasswordForm']);
Route::post('resett-password', [ForgotCustom::class, 'submitResetPasswordForm']);


Route::get('/auth-user', function () {
    return response()->json(Auth::user());
});


Route::get('/user', function () {
    return view('pages.admin.user.manage-user');
})->middleware('isAdmin');
Route::get('/edit-user', function () {
    if (isset($_GET['id_user'])) {
        return view('pages.admin.user.edit-user')->with('id_user', $_GET['id_user']);
    }
})->middleware('isAdmin');
Route::get('/user-create', function () {
    return view('pages.admin.user.create-user');
})->middleware('isAdmin');

Route::get('/user-edit-personal', function () {
    return view('pages.user-edit-personal');
})->middleware('isUser');
Route::get('/content-create', function () {
    return view('pages.content.create-content');
})->middleware('isUser');
Route::get('/manage-content', function () {
    return view('pages.content.manage-content');
})->middleware('isUser');
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/delete-content/{id_content}', [ContentController::class, 'destroy'])->middleware('isUser');
Route::get('/edit-content', [ContentController::class, 'edit'])->middleware('isUser');

Route::get('/detail-content', [DetailController::class, 'show_detail'])->middleware('isUser');

Route::get('/manage-category', function () {
    return view('pages.admin.category.manage-category');
})->middleware('isAdmin');

Route::post('/content', [ContentController::class, 'store'])->middleware('isUser');
Route::post('/update-content/{id_content}', [ContentController::class, 'update'])->middleware('isUser');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

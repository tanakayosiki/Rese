<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\NiceController;
use App\Http\Controllers\MyPageController;
use App\Http\Controllers\ReviewController;

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

Route::get('/',[ShopController::class,'index']);
Route::middleware('auth')->group(function () {
    Route::get('/menu',[MenuController::class,'menu']);
    Route::get('/detail/{id}',[ReservationController::class,'detail'])->name('detail');
    Route::post('/reservation/{id}',[ReservationController::class,'reservation'])->name('reservation');
    Route::get('/done',[ReservationController::class,'done']);
    Route::get('/nice/{shop}',[NiceController::class,'nice'])->name('nice');
    Route::get('/unnice/{id}',[NiceController::class,'unNice'])->name('unnice');
    Route::get('/delete/{id}',[MyPageController::class,'delete'])->name('delete');
    Route::get('/mypage',[MyPageController::class,'index']);
    Route::get('/mypage/{id}',[MyPageController::class,'cancel'])->name('cancel');
    Route::get('/logout',[AuthController::class,'getLogout']);
    Route::post('/mypage/update/{id}',[MyPageController::class,'update'])->name('update');
    Route::get('/review/{id}',[ReviewController::class,'review'])->name('review');
    Route::get('/evaluation/{id}',[ReviewController::class,'evaluation'])->name('evaluation');
    Route::post('/evaluation',[ReviewController::class,'postEvaluation']);
});
Route::get('/login',[AuthController::class,'getLogin'])->name('login');
Route::post('/login',[AuthController::class,'postLogin']);
Route::get('/register', [AuthController::class,'getRegister']);
Route::post('/register', [AuthController::class,'postRegister']);
Route::get('/menu',[MenuController::class,'menu']);
Route::get('/thanks',[AuthController::class,'thanks']);

Route::get('/search',[ShopController::class,'search']);



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\NiceController;
use App\Http\Controllers\MyPageController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\MailController;


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
    Route::post('/detail/img_store/{id}',[ReservationController::class,'imgStore'])->name('imgStore');
    Route::get('/nice/{shop}',[NiceController::class,'nice'])->name('nice');
    Route::get('/unnice/{id}',[NiceController::class,'unNice'])->name('unnice');
    Route::get('/delete/{id}',[MyPageController::class,'delete'])->name('delete');
    Route::get('/mypage',[MyPageController::class,'index']);
    Route::get('/mypage/{id}',[MyPageController::class,'cancel'])->name('cancel');
    Route::get('/logout',[AuthController::class,'getLogout']);
    Route::post('/mypage/update/{id}',[MyPageController::class,'update'])->name('myPageUpdate');
    Route::get('/review/{id}',[ReviewController::class,'review'])->name('review');
    Route::get('/evaluation/{id}',[ReviewController::class,'evaluation'])->name('evaluation');
    Route::post('/evaluation',[ReviewController::class,'postEvaluation']);

    Route::middleware(['AdminMiddleware'])->group(function(){
    Route::get('/admin',[AdminController::class,'index']);
    Route::get('/admin/select',[AdminController::class,'select']);
    Route::put('/admin/{id}/select',[AdminController::class,'postSelect'])->name('select');
    Route::get('/admin/mail',[MailController::class,'send']);
    });

    Route::middleware(['ManagerMiddleware'])->group(function(){
    Route::get('/manager',[ManagerController::class,'index'])->name('index');
    Route::get('/manager/new_shop/{id}',[ManagerController::class,'newShop'])->name('newShop');
    Route::post('/manager/new_shop/{id}',[ManagerController::class,'postNewShop'])->name('postNewShop');
    Route::get('/manager/update/{id}',[ManagerController::class,'update'])->name('update');
    });
    Route::post('/manager/update/{id}',[ManagerController::class,'postUpdate'])->name('postUpdate');
    Route::get('/manager/reservation/{id}',[ManagerController::class,'reservation'])->name('reservation_confirm');
});
Route::get('/login',[AuthController::class,'getLogin'])->name('login');
Route::post('/login',[AuthController::class,'postLogin']);
Route::get('/register', [AuthController::class,'getRegister']);
Route::post('/register', [AuthController::class,'postRegister']);
Route::get('/menu',[MenuController::class,'menu']);
Route::get('/thanks',[AuthController::class,'thanks']);
Route::get('/search',[ShopController::class,'search']);
Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');
Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');
Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');


Route::put('/admin/{id}/attach', [AdminController::class,'attach'])->name('attach');
Route::put('/admin/{id}/detach', [AdminController::class,'detach'])->name('detach');



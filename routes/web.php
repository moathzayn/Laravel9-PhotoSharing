<?php

use App\Http\Controllers\AdminPanel\ImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminPanel\HomeController as AdminController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\PhotosController as AdminPhotosController;
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

Route::get('/home',[HomeController::class,'redirect']);
Route::get('/home/photo/{id}',[HomeController::class,'photo'])->name('photo');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
//**************************AdminPanel**************************//
Route::prefix('admin')->name('admin.')->group(function(){
Route::get('/',[AdminController::class,'index'])->name('index');
//**************************AdminPanel**************************//
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/delete/{id}','destroy')->name('delete');
    });
    Route::prefix('/photo')->name('photos.')->controller(AdminPhotosController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/delete/{id}','destroy')->name('delete');
    });
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function(){
        Route::get('/{uid}','index')->name('index');
        Route::get('/create/{uid}','create')->name('create');
        Route::post('/store/{uid}','store')->name('store');
        Route::post('/update/{uid}/{id}','update')->name('update');
        Route::get('/delete/{uid}/{id}','destroy')->name('delete');
    });
    Route::get('/setting',[AdminController::class,'setting'])->name('setting');
    Route::post('/setting/update',[AdminController::class,'settingUpdate'])->name('setting.update');

});

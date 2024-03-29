<?php

use App\Http\Controllers\AdminPanel\AdminUserController as AdminUserController;
use App\Http\Controllers\UserController as UserController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminPanel\HomeController as AdminController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\PhotosController as AdminPhotosController;
use App\Http\Controllers\AdminPanel\MessageController as AdminMessageController;
use App\Http\Controllers\AdminPanel\CommentController as AdminCommentController;
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


//**************************UserPanel**************************//
Route::get('/home',[HomeController::class,'redirect']);
Route::get('/userpanel',[UserController::class,'index']);
Route::get('/',[HomeController::class,'redirectg']);
Route::get('/home/photo/{id}',[HomeController::class,'photo'])->name('photo');
Route::get('/home/category/{id}',[HomeController::class,'category'])->name('category');
Route::get('/home/aboutus',[HomeController::class,'aboutus'])->name('aboutus');
Route::get('/home/references',[HomeController::class,'references'])->name('references');
Route::get('/home/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/home/storemessage',[HomeController::class,'storemessage'])->name('storemessage');
Route::get('/home/faq',[HomeController::class,'faq'])->name('faq');
Route::post('/home/storecomment',[HomeController::class,'storecomment'])->name('storecomment');
Route::view('/loginuser','user.login');
Route::get('/register',[HomeController::class,'register'])->name('register');
Route::get('/logout',[HomeController::class,'logout'])->name('logout');
Route::post('/loginadmincheck',[HomeController::class,'loginadmincheck'])->name('loginadmincheck');
Route::view('/loginadmin','admin.login')->name('admin.login');
Route::get('/home/upload',[HomeController::class,'upload'])->name('upload');
Route::post('/home/uploadstore',[HomeController::class,'uploadstore'])->name('uploadstore');


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
Route::middleware('auth')->group(function() {
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function(){
        Route::get('/',[AdminController::class,'index'])->name('index');
        //**************************AdminPanel**************************//
            Route::prefix('/setting')->name('setting')->controller(AdminController::class)->group(function() {
                Route::get('/',  'setting')->name('');
                Route::post('/update','settingUpdate')->name('.update');
            });
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
            Route::prefix('/message')->name('message.')->controller(AdminMessageController::class)->group(function(){
                Route::get('/','index')->name('index');
                Route::get('/show/{id}','show')->name('show');
                Route::post('/update/{id}','update')->name('update');
                Route::get('/delete/{id}','destroy')->name('destroy');
            });
            Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function(){
                Route::get('/','index')->name('index');
                Route::get('/create','create')->name('create');
                Route::get('/edit/{id}','edit')->name('edit');
                Route::get('/show/{id}','show')->name('show');
                Route::post('/update/{id}','update')->name('update');
                Route::post('/store','store')->name('store');
                Route::get('/delete/{id}','destroy')->name('destroy');

            });
            Route::prefix('/comment')->name('comment.')->controller(AdminCommentController::class)->group(function(){
                Route::get('/','index')->name('index');
                Route::get('/show/{id}','show')->name('show');
                Route::post('/update/{id}','update')->name('update');
                Route::get('/delete/{id}','destroy')->name('destroy');
            });
            Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function(){
                Route::get('/','index')->name('index');
                Route::get('/show/{id}','show')->name('show');
                Route::get('/edit/{id}','edit')->name('edit');
                Route::post('/update/{id}','update')->name('update');
                Route::get('/delete/{id}','destroy')->name('destroy');
                Route::post('/addrole/{id}','addrole')->name('addrole');
                Route::get('/destroyrole/{uid}/{rid}','destroyrole')->name('destroyrole');
                Route::get('/destroyroleshow/{uid}/{rid}','destroyroleshow')->name('destroyroleshow');
            });
        });
});

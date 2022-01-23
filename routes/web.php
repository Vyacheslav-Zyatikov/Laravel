<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\NewsController;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use \App\Http\Controllers\Admin\NewsController as AdminNewsController;
use \App\Http\Controllers\User\RequestController as UserRequestController;
use \App\Http\Controllers\User\FeedbackController as UserFeedbackController;

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
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function (){
    Route::view('/', 'admin.index')->name('index');
    Route::resource('/categories', AdminCategoryController::class);
    Route::resource('/news', AdminNewsController::class);
});

Route::group(['prefix' => 'user', 'as' => 'user.'], function (){
    Route::resource('/request', userRequestController::class);
    Route::resource('/feedback', userFeedbackController::class);
});

Route::get('/', fn() => view('welcome'));

Route::get('/auth', fn() => view('auth'));

Route::get('/about', fn() => "Страница о проекте");

Route::get('/news/{id_category}/{id}', [NewsController::class, 'show']);

Route::get('/news', [NewsController::class, 'index']);

Route::get('/news/category', [CategoryController::class, 'indexCategory']) -> name('indexCategory');

Route::get('/news/{id_category}', [CategoryController::class, 'showCategory']) -> name('showCategory');

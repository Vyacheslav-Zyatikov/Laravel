<?php

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

Route::get('/', fn() => "Приветствуем вас на нашем сайте");

Route::get('/about', fn() => "Страница о проекте");

Route::get('/onenews', fn() => "Эта страница с одной новостью");

Route::get('/news', fn() => "Это страница с заголовками новостей");

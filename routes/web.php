<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'App\Http\Controllers\HomeController@home')->name('app.home');
Route::get('/entrar', 'App\Http\Controllers\HomeController@login')->name('app.login');
Route::post('/login', 'App\Http\Controllers\AuthController@login')->name('auth.login');
Route::get('/cadastro', 'App\Http\Controllers\HomeController@register')->name('app.register');
Route::post('/register', 'App\Http\Controllers\AuthController@register')->name('auth.client.register');

/**
 * Administrator
 */
Route::get('/admin/painel', 'App\Http\Controllers\Admin\AdminController@dashboard')->name('admin.dashboard');
Route::get('/admin/adicionar-funcionario', 'App\Http\Controllers\Admin\Officer\OfficerController@addView')->name('admin.add.officer');
Route::get('/admin/adicionar-loja', 'App\Http\Controllers\Admin\Shop\ShopController@addView')->name('admin.add.shop');
Route::get('/admin/adicionar-produto', 'App\Http\Controllers\Admin\Product\ProductController@addView')->name('admin.add.product');

<?php

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

Route::get('/', 'AuthController@index')->name('home');
Route::get('/admin', 'admin\AdminController@index')->name('indexAdmin');
Route::post('/login', 'AuthController@login')->name('login');
Route::get('/password', 'PasswordController@index')->name('passwordIndex');
Route::post('/reset-password', 'PasswordController@resetPassword')->name('resetPassword');


Route::prefix('admin')->group(function () {


    Route::post('/login-admin', 'admin\AdminController@login')->name('loginAdmin');
    Route::get('/main-admin', 'admin\AdminController@mainAdmin')->name('mainAdmin');
    Route::get('/create-register', 'admin\AdminController@createRegister')->name('createRegister');
    Route::post('/register', 'admin\AdminController@register')->name('register');
    Route::get('/logout-admin', 'admin\AdminController@logout')->name('logoutAdmin');


});


Route::middleware('auth')->group(function () {

    Route::get('/index', 'PagesController@index')->name('index');
    Route::get('/conceptos', 'PagesController@conceptos')->name('conceptos');
    Route::get('/planificando_tu_proyecto', 'PagesController@planificando_tu_proyecto')->name('planificandoProyecto');
    Route::get('/recursos', 'PagesController@recursos')->name('recursos');
    Route::get('/somos', 'PagesController@somos')->name('somos');


});

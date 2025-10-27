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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Rotas do Front
Route::get('/', 'FrontController@index')->name('front.index');
Route::get('/orcamento', 'FrontController@orcamento')->name('front.orcamento');
Route::get('/representante', 'FrontController@representante')->name('front.representante');
Route::get('/sobre', 'FrontController@sobre')->name('front.sobre');
Route::get('/produtos', 'FrontController@produtos')->name('front.produtos');
Route::get('/qualidade', 'FrontController@qualidade')->name('front.qualidade');
Route::get('/contato', 'FrontController@contato')->name('front.contato');

// Rotas administrativas
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', 'Admin\AdminController@index')->name('dashboard');
    Route::resource('testimonials', 'Admin\TestimonialController')->except(['show']);
});
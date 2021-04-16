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

Auth::routes();

Route::middleware(['admin'])->prefix('admin')->namespace('admin')->group(static function () {
    Route::get('/', 'DashboardController@index')->name('admin');
    Route::get('/users', 'UserController@index')->name('users');
    Route::get('/user/register', 'UserController@register')->name('user.register');
    Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
    Route::put('/user/update/{id}', 'UserController@update')->name('post.update');
    Route::get('/users/view/{id}', 'UserController@view');
    Route::delete('/users/destroy/{id}', 'UserController@destroy');
    Route::post('/users/delete_all', 'UserController@delete_all')->name('users.delete_all');

    //    Setting
    Route::get('/setting', 'SettingController@index')->name('setting');
    Route::post('/setting/edit', 'SettingController@update')->name('setting.edit');

    // Page
    Route::get('/page', 'PageController@index')->name('page');
    Route::any('/page/form/{form}', 'PageController@form');
    Route::any('/page/form/{form}/{id}', 'PageController@form');
    Route::get('/page/view/{id}', 'PageController@view');
    Route::delete('/page/destroy/{id}', 'PageController@destroy');
    Route::post('/page/delete_all', 'PageController@delete_all')->name('page.delete_all');

    // Role
    Route::get('/role', 'RoleController@index')->name('role');
    Route::any('/role/form/{form}', 'RoleController@form');
    Route::any('/role/form/{form}/{id}', 'RoleController@form');
    Route::get('/role/view/{id}', 'RoleController@view');
    Route::delete('/role/destroy/{id}', 'RoleController@destroy');
    Route::post('/role/delete_all', 'RoleController@delete_all')->name('role.delete_all');

});

Route::namespace('Front')->group(static function () {
    //    Page
    Route::get('/', 'HomeController@index')->name('home');
    Route::view('/contact-us', 'front.contact-us')->name('contact');
    Route::view('/feature', 'front.features')->name('feature');
    Route::view('/pricing', 'front.pricing')->name('pricing');
    Route::view('/free-trial', 'front.free-trial')->name('free-trial');

    // Route::get('/{slug}', 'PageController@index')->name('page.index');
});

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

Route::get('/', function () {
    return redirect()->route('issues.index');
});

Route::get('/home', function () {
    return redirect()->route('issues.index');
});


Auth::routes();

// Issues
Route::resource('/issues', 'IssueController');

// Users
Route::resource('/users', 'UserController');

// Dispatch
Route::get('/dispatch', 'DispatchController@index');

// mobile
Route::get('/m/', 'MobileController@index')->name('mobile.index');
Route::get('/m/login', 'MobileController@getLogin')->name('mobile.login');
Route::post('/m/login', 'MobileController@postLogin');
Route::get('/m/register', 'MobileController@getRegister')->name('mobile.register');
Route::post('/m/register', 'MobileController@postRegister');
Route::get('/m/wizard/1', 'MobileController@getWizard1')->name('mobile.wizard1');
Route::get('/m/wizard/2', 'MobileController@getWizard2')->name('mobile.wizard2');
Route::get('/m/wizard/3', 'MobileController@getWizard3')->name('mobile.wizard3');
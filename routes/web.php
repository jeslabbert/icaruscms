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

Route::domain('icarus.test')->group(function () {
    Auth::routes();
    Route::get('/', function () {
        return view('master-welcome');
    });
    Route::get('/newsite', 'AgentController@sitecreate')->name('newsite');
    Route::post('/newsite', 'AgentController@newSiteScript')->name('storesite');
    Route::get('/updatesite/{id}', 'AgentController@editsite')->name('editsite');
    Route::post('/updatesite', 'AgentController@updatesite')->name('updatesite');
});

Route::domain('portal.icarus.test')->group(function () {
    Auth::routes();
    Route::get('/', function () {
        return view('master-welcome');
    });
    Route::get('/newsite', 'AgentController@sitecreate')->name('newsite');
    Route::post('/newsite', 'AgentController@newSiteScript')->name('storesite');
    Route::get('/updatesite/{id}', 'AgentController@editsite')->name('editsite');
    Route::post('/updatesite', 'AgentController@updatesite')->name('updatesite');
});

Route::group(['middleware' => 'tenancy.enforce'], function () {
    Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
    Route::get('/home', 'HomeController@index')->name('home');
});





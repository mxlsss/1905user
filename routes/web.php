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
    return view('welcome');
});
Route::get('/info', function () {
    phpinfo();
});
ROute::get('/link/regview','Test\LInkController@regview');
ROute::get('/link/loginview','Test\LInkController@loginview');
ROute::get('/link/indexview','Test\LInkController@indexview');
ROute::post('/link/reg','Test\LInkController@reg');
ROute::post('/link/login','Test\LInkController@login');
ROute::post('/link/index','Test\LInkController@index');
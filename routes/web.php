<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

/*
 * Группа роутов для покупателей
 */
Route::group(['prefix' => 'buyer'], function () {
    //    Рабочий стол
    Route::get('dashboard', function ()    {
        return view('client.pages.index');
    });
    //    Список заявок
    Route::get('orders', function ()    {
        return view('client.pages.orders');
    });
    //    Гараж
    Route::get('garage', function ()    {
        return view('client.pages.garage');
    });
    //    Избранное
    Route::get('favorit', function ()    {
        return view('client.pages.favorit');
    });
});
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


Route::group([
    'prefix' => get_prefix(),
],
    function () {

        Route::get('/', 'Site\MainpageController@index');
        Route::get('/tokarnaya', 'Site\MainpageController@tokarnayaObrabotka');
        Route::get('/frezirovka', 'Site\MainpageController@frezirovka');
        Route::get('/shlifovka', 'Site\MainpageController@shlifovka');
        Route::get('/slesarnie', 'Site\MainpageController@slesarnie');
        Route::get('/termo', 'Site\MainpageController@termo');
        Route::get('/pila', 'Site\MainpageController@pila');
        Route::get('/about_us', 'Site\MainpageController@about_us');
        Route::get('/gallery', 'Site\MainpageController@gallery');
        Route::get('/contacts', 'Site\MainpageController@contacts');

        Route::get('/orders', 'Site\OrderController@index');

    }
);

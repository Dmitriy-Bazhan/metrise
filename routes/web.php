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
        Route::get('/tokarnaya-obrabotka', 'Site\MainpageController@tokarnayaObrabotka');
        Route::get('/frezirovanie', 'Site\MainpageController@frezirovka');
        Route::get('/shlifovalnye-raboty', 'Site\MainpageController@shlifovka');
        Route::get('/zuboreznye-raboty', 'Site\MainpageController@zuborezka');
        Route::get('/termoobrabotka', 'Site\MainpageController@termo');
        Route::get('/pilenie-zagotovok', 'Site\MainpageController@pila');
        Route::get('/slesarnye-raboty', 'Site\MainpageController@slesarnie');
        Route::get('/about_us', 'Site\MainpageController@about_us');
        Route::get('/gallery', 'Site\MainpageController@gallery');
        Route::get('/contacts', 'Site\MainpageController@contacts');

        Route::get('/orders', 'Site\OrderController@index');
        Route::post('/save-orders', 'Site\OrderController@saveOrders');
    }
);

Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth',
], function(){
    Route::get('/', 'Admin\AdminController@index');
});

Route::post('/delete_order', 'Admin\AdminController@removeOrder')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sitemap.xml', 'SitemapController@index');

Route::get('/error',function(){
    abort(404);
});

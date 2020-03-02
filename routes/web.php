<?php


Route::get('/productos/nuevo', 'ProductosController@create');

//Route::get('/productos/index', 'ProductosController@index')->name('productosindex');

Route::post('/productosAgregar', 'ProductosController@store')->name('productosAgregar');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/addProductos', 'ProductosController@addProductos');

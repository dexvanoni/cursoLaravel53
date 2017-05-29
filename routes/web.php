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

Route::get('minharota.me', function () {
    return "Hello World";
});

  Route::get('minharota/rota1', function () {
      return "Hello World - Rota 1";
  });
    Route::get('client/{id}', function ($id) {
        return "Client $id";
    });

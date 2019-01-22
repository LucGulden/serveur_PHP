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

Route::get('/home', function () {
    return view('accueil');
});

Route::get('/boutique', function () {
    return view('boutique');
})->name("boutique");

Route::get('/boite-a-idees', function () {
    return view('idee');
})->name("idee");

Route::get('/evenements-passes', function () {
    return view('evenementspasses');
})->name("evenementspasses");
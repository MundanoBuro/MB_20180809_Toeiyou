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
    return view('pages.home')->with('name', 'Home')
                             ->with('title', 'Gastro-Innova')
                             ->with('keywords', 'Comidas,Proprocesador')
                             ->with('description', 'Gastro Innova')
                             ->with('author', 'www.jlmayorga.com.co')
                             ->with('current', 'home');
});

Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/business', function () {
    return view('pages.business');
});
Route::get('/clients', function () {
    return view('pages.clients');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/industry', function () {
    return view('pages.industry');
});
Route::get('/news', function () {
    return view('pages.news');
});
Route::get('/admin', function () {
    return view('pages.admin');
});

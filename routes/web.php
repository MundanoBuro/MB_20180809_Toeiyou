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
    return view('pages.about')->with('name', 'Nosotros')
                             ->with('title', 'Nosotros | Gastro-Innova')
                             ->with('keywords', 'Comidas,Proprocesador')
                             ->with('description', 'Gastro Innova')
                             ->with('author', 'www.jlmayorga.com.co')
                             ->with('current', 'about');
});
Route::get('/business', function () {
    return view('pages.business')->with('name', 'Lineas de Negoción')
                             ->with('title', 'Lineas de Negoción | Gastro-Innova')
                             ->with('keywords', 'Comidas,Proprocesador')
                             ->with('description', 'Gastro Innova')
                             ->with('author', 'www.jlmayorga.com.co')
                             ->with('current', 'business');
});
Route::get('/clients', function () {
    return view('pages.clients')->with('name', 'Nuestros Clientes')
                             ->with('title', 'Nuestros Clientes | Gastro-Innova')
                             ->with('keywords', 'Comidas,Proprocesador')
                             ->with('description', 'Gastro Innova')
                             ->with('author', 'www.jlmayorga.com.co')
                             ->with('current', 'clients');
});
Route::get('/contact', function () {
    return view('pages.contact')->with('name', 'Home')
                             ->with('title', 'Gastro-Innova')
                             ->with('keywords', 'Comidas,Proprocesador')
                             ->with('description', 'Gastro Innova')
                             ->with('author', 'www.jlmayorga.com.co')
                             ->with('current', 'contact');
});
Route::get('/industry', function () {
    return view('pages.industry')->with('name', 'Home')
                             ->with('title', 'Gastro-Innova')
                             ->with('keywords', 'Comidas,Proprocesador')
                             ->with('description', 'Gastro Innova')
                             ->with('author', 'www.jlmayorga.com.co')
                             ->with('current', 'industry');
});
Route::get('/news', function () {
    return view('pages.news')->with('name', 'Home')
                             ->with('title', 'Gastro-Innova')
                             ->with('keywords', 'Comidas,Proprocesador')
                             ->with('description', 'Gastro Innova')
                             ->with('author', 'www.jlmayorga.com.co')
                             ->with('current', 'news');
});
Route::get('/admin', function () {
    return view('pages.admin')->with('name', 'Home')
                             ->with('title', 'Gastro-Innova')
                             ->with('keywords', 'Comidas,Proprocesador')
                             ->with('description', 'Gastro Innova')
                             ->with('author', 'www.jlmayorga.com.co')
                             ->with('current', 'admin');
});
Route::get('/terms', function () {
    return view('pages.terms')->with('name', 'Home')
                             ->with('title', 'Gastro-Innova')
                             ->with('keywords', 'Comidas,Proprocesador')
                             ->with('description', 'Gastro Innova')
                             ->with('author', 'www.jlmayorga.com.co')
                             ->with('current', 'terms');
});
Route::get('/policies', function () {
    return view('pages.policies')->with('name', 'Home')
                             ->with('title', 'Gastro-Innova')
                             ->with('keywords', 'Comidas,Proprocesador')
                             ->with('description', 'Gastro Innova')
                             ->with('author', 'www.jlmayorga.com.co')
                             ->with('current', 'policies');
});
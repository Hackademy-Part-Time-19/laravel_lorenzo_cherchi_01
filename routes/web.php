<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', ['titolo' => 'Best site ever created']);
})->name('home');

Route::get('/articoli/articoli', function () {
    $articoli = [
        ['title' => 'Articolo 1', 'category' => 'categoria test 1', 'description' => 'descrizione test 1'],
        ['title' => 'Articolo 2', 'category' => 'categoria test 2', 'description' => 'descrizione test 2'],
        ['title' => 'Articolo 3', 'category' => 'categoria test 3', 'description' => 'descrizione test 3'],
        ['title' => 'Articolo 4', 'category' => 'categoria test 4', 'description' => 'descrizione test 4']
    ];


    return view('articoli/articoli', ['articoli' => $articoli, 'titolo' => 'titolo test']);
})->name('articoli');



Route::get('/contatti/chi-sono', function () {
    return view('contatti/chi-sono', ['descrizione' => 'Sono Lorenzo Cherchi e sono uno studente di Aulab.']);
})->name('contatti');

Route::get('/articolo/articolo/{id}', function ($id) {
    $articoli = [
        ['title' => 'Articolo 1', 'category' => 'categoria test 1', 'description' => 'descrizione test 1'],
        ['title' => 'Articolo 2', 'category' => 'categoria test 2', 'description' => 'descrizione test 2'],
        ['title' => 'Articolo 3', 'category' => 'categoria test 3', 'description' => 'descrizione test 3'],
        ['title' => 'Articolo 4', 'category' => 'categoria test 4', 'description' => 'descrizione test 4']
    ];
    return view('/articolo/articolo', ['articolo' => $articoli[$id]]);
})->name('articolo');

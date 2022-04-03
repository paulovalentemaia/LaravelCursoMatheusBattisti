<?php

use Illuminate\Support\Facades\Route;

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
    $nome = "Paulo";
    $idade = 29;
    $arr = [10,20,30,40,50];
    $nomes = ['Paulo', 'Luziete', 'Arthur', 'Kayo', 'Apólo', 'Thor'];

    return view('welcome',
        [
            'nome' => $nome,
            'idade2' => $idade,
            'profissao' => 'Programador',
            'arr' => $arr,
            'nomes' => $nomes
        ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    $busca = request('search');

    return view('products',['busca' => $busca]);
});

Route::get('/produto/{id?}', function($id = null) {
   return view('product', ['id' => $id]);
});

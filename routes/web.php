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

    $nome ='Giovani';
    $filme = 'fury';
    $arr = [10,20,30,40,50];


    return view('welcome',
    [
        'nome' => $nome, 
        'filme' => $filme,
        'arr' => $arr
    ]);
});

Route::get('/buscaprof', function () {
    return view('Professores');
});

Route::get('/alunos', function () {
    return view('Alunos');
});

Route::get('/novoalunos', function () {
    return view('NovoAlunos');
});

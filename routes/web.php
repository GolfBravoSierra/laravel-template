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

use App\Http\Controllers\professorcontroller;
 
Route::get('/', [professorcontroller::class, 'index']);
Route::get('/buscaprof/create', [professorcontroller::class, 'create']);

Route::get('/buscaprof', function () {
    return view('Professores');
});

Route::get('/alunos', function () {

    $busca = request('search');    
 
    return view('alunos',['busca' => $busca]);
});

Route::get('/novoalunos', function () {
    return view('NovoAlunos');
});


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class professorcontroller extends Controller
{
    public function index() {
        $nome ='Giovani';
        $filme = 'fury';
        $arr = [10,20,30,40,50];
    
    
        return view('welcome',
        [
            'nome' => $nome, 
            'filme' => $filme,
            'arr' => $arr
        ]);
    }

    public function create() {
        return view('cadastra.professores');
    }
    

}

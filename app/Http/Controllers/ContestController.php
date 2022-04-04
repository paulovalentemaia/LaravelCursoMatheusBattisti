<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContestController extends Controller
{
    public function index()
    {
        $nome = "Paulo";
        $idade = 29;
        $arr = [10, 20, 30, 40, 50];
        $nomes = ['Paulo', 'Luziete', 'Arthur', 'Kayo', 'Apólo', 'Thor'];

        return view('welcome',
            [
                'nome' => $nome,
                'idade2' => $idade,
                'profissao' => 'Programador',
                'arr' => $arr,
                'nomes' => $nomes
            ]);
    }

    public function create()
    {
        return view('contests.create');
    }
}

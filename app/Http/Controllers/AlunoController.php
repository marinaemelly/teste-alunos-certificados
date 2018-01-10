<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunoController extends Controller
{
    public function buscarTodos(){
    	$registros = Aluno::all();

    	return view('listagemAlunos', compact('registros'));
    } 
}

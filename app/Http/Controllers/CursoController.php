<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Curso;

class CursoController extends Controller
{
    public function index(){
    	$registros = Curso::all();

    	return view('index', compact('registros'));
    } 

    public function cadastrar(){
    	return view('cadastrarCurso');
    }

    public function salvar(Request $req){
    	$dados = $req->all();

    	if(isset($dados['inativo'])){
    		$dados['inativo'] = 1;
    	}else{
    		$dados['inativo'] = 0;
    	}

    	Curso::create($dados);

    	return redirect()->route('cursos');
    }

    public function editar($id){
    	$curso = Curso::find($id);
    	return view('editarCurso', compact('curso'));
    }

    public function atualizar(Request $req, $id){
    	$dados = $req->all();

    	if(isset($dados['inativo'])){
    		$dados['inativo'] = 1;
    	}else{
    		$dados['inativo'] = 0;
    	}

    	Curso::find($id)->update($dados);

    	return redirect()->route('cursos');
    }

    public function deletar($id){
    	Curso::find($id)->delete();

    	return redirect()->route('cursos');
    }
}

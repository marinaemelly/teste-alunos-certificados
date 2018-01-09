<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno_certificado;

class AlunoCertificadoController extends Controller
{
    public function alunosMaisCertificados(){
    	$registros = Aluno_certificado::select('aluno_id', DB::raw('count(id) as numeroCertificados'))->groupBy('aluno_id')->all();
    	dd($registros);
    }
}

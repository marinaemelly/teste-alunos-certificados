<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno_certificado;
use Illuminate\Support\Facades\DB;

class AlunoCertificadoController extends Controller
{
    public function buscarAlunosMaisCertificados(){
    	$registros = DB::select('select count(*) as certificados, alunos.* from aluno_certificados as alucer inner join alunos on alunos.id = alucer.aluno_id group by aluno_id order by certificados desc limit 100');
    	return view('relatorioAlunosMaisCertificados', compact('registros'));
    }

    /*public function buscarCursosAluno($aluno_id){
        
        $cursos = DB::select('select cursos.* from aluno_certificados as alucer inner join cursos on alucer.curso_id = cursos.id where alucer.aluno_id = :aluno_id');
    }*/
}

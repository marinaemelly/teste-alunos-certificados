@extends('layout.template')

@section('titulo', 'Cursos')

@section('conteudo')
	<div class="container">
	  <h2>Lista de Cursos</h2>
	  <a class="btn btn-primary pull-right" href="{{route('cursos.cadastrar')}}">Cadastrar +</a>           
	  <table class="table table-striped">
	    <thead>
	      <tr>
	        <th></th>
	        <th>ID</th>
	        <th>Nome</th>
	        <th>Inativo</th>
	      </tr>
	    </thead>
	    <tbody>
	    	@foreach($registros as $curso)
		      <tr>
		        <td>
		        	<a class="btn btn-small" href="{{route('cursos.editar', $curso->id)}}">Editar</a>
		        	<a class="btn btn-small" href="{{route('cursos.deletar', $curso->id)}}">Excluir</a>
		        </td>
		        <td>{{$curso->id}}</td>
		        <td>{{$curso->nome}}</td>
		        <td>{{$curso->inativo == 1 ? "Sim" : "Não"}}</td>
		      </tr>
	     	@endforeach
	    </tbody>
	  </table>
	</div>
@endsection
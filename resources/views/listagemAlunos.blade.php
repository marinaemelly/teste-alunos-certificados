@extends('layout.template')

@section('titulo', 'Alunos')

@section('conteudo')
	<div class="container">
	  <h2>Lista de Alunos</h2>
	  <table class="table table-striped">
	    <thead>
	      <tr>
	        <th>ID</th>
	        <th>Nome</th>
	        <th>Matrícula</th>
	        <th>Email</th>
	        <th>Telefone</th>
	      </tr>
	    </thead>
	    <tbody>
	    	@foreach($registros as $reg)
		      <tr>
		        <td>{{$reg->id}}</td>
		        <td>{{$reg->nome}}</td>
		        <td>{{$reg->matriculado}}</td>
		        <td>{{$reg->email}}</td>
		        <td>{{$reg->telefone}}</td>
		      </tr>
	     	@endforeach
	    </tbody>
	  </table>
	</div>
@endsection
@extends('layout.template')

@section('titulo', 'Relatório')

@section('conteudo')
	<div class="container">
	  <h2>Relatório dos 100 alunos com mais certificações</h2>
	  <table class="table table-striped">
	    <thead>
	      <tr>
	        <th>ID</th>
	        <th>Nome</th>
	        <th>Matrícula</th>
	        <th>Email</th>
	        <th>Telefone</th>
	        <th>Número de certificados</th>
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
		        <td>{{$reg->certificados}}</td>
		      </tr>
	     	@endforeach
	    </tbody>
	  </table>
	</div>
@endsection
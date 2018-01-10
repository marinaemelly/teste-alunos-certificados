@extends('layout.template')

@section('titulo', 'Relatório')

@section('conteudo')
	<div class="container">
	  <h2>Relatório dos cursos com mais de 100 certificados</h2>
	  <table class="table table-striped">
	    <thead>
	      <tr>
	        <th>Nome</th>
	        <th>Número de certificados</th>
	      </tr>
	    </thead>
	    <tbody>
	    	@foreach($registros as $reg)
		      <tr>
		        <td>{{$reg->nome}}</td>
		        <td>{{$reg->certificados}}</td>
		      </tr>
	     	@endforeach
	    </tbody>
	  </table>
	</div>
@endsection
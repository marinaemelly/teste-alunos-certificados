@extends('layout.template')

@section('titulo', 'Cadastrar curso')

@section('conteudo')
	<div class="container">
	  <h2>Cadastrar Curso</h2>
	   <form action="{{route('cursos.salvar')}}" method="post">
	   	{{ csrf_field() }}
		  <div class="form-group">
		    <label for="nome">Nome do curso</label>
		    <input type="text" class="form-control" id="nome" name="nome">
		  </div>
		  <div class="checkbox">
		    <label><input type="checkbox" name="inativo" value="1"> Inativo</label>
		  </div>
		  <button type="submit" class="btn btn-success">Enviar</button>
		</form> 
	</div>
@endsection
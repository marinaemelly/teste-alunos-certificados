@extends('layout.template')

@section('titulo', 'Editar curso')

@section('conteudo')
	<div class="container">
	  <h2>Editar Cursos</h2>
	   <form action="{{route('cursos.atualizar', $curso->id)}}" method="post">
	   	{{ csrf_field() }}
	   	<input type="hidden" name="_method" value="put">
		  <div class="form-group">
		    <label for="nome">Curso</label>
		    <input type="text" class="form-control" id="nome" name="nome" value="{{$curso->nome}}">
		  </div>
		  <div class="checkbox">
		    <label><input type="checkbox" name="inativo" value="1" {{$curso->inativo == 1 ? "checked" : ""}}> Inativo</label>
		  </div>
		  
		  <button type="submit" class="btn btn-success">Enviar</button>
		</form> 
	</div>
@endsection
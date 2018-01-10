<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('titulo')</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <ul class="nav nav-tabs"> 
        <li role="presentation"><a href="{{route('cursos')}}">Cursos</a></li> 
        <li role="presentation"><a href="{{route('alunos')}}">Alunos</a></li> 
        <li role="presentation" class="dropdown"> 
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Relatórios <span class="caret"></span> </a> 
          <ul class="dropdown-menu"> 
            <li><a href="{{route('relatorio.maiscertificados')}}">Relatório de alunos mais certificados</a></li> 
            <li><a href="{{route('relatorio.cursosmaiscertificados')}}">Relatório de cursos com mais de 100 certificados</a></li> 
           </ul> 
        </li> 
       </ul>

   

    
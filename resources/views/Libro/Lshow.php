@extends('Plantilla.plantilla')  {{-- ESTA PARTE SIEMPRE VA--}}

@section('titulo','show') {{-- ESTA PARTE SIEMPRE VA--}}

@section('contenido') {{-- ESTA PARTE SIEMPRE VA--}}

<h1><center>Mostrar Libros Individuales (SHOW)</center></h1>

<h6><b>ID</b></h6>
<p>{{$libro->id}}</p>

<h6><b>Titulo</b></h6>
<p>{{$libro->titulo}}</p>

<h6><b>Autor</b></h6>
<p>{{$libro->autor}}</p>

<h6><b>Editorial</b></h6>
<p>{{$libro->editorial}}</p>

<h6><b>AnioPublicacion</b></h6>
<p>{{$libro->anioPublicacion}}</p>

<h6><b>CantidadDisponible</b></h6>
<p>{{$libro->cantidadDisponible}}</p>

@endsection()
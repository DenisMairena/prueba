@extends('Plantilla.plantilla')  {{-- ESTA PARTE SIEMPRE VA--}}

@section('titulo','show') {{-- ESTA PARTE SIEMPRE VA--}}

@section('contenido') {{-- ESTA PARTE SIEMPRE VA--}}

<h1><center>Mostrar Los Prestamos Individuales (SHOW)</center></h1>

<h6><b>ID</b></h6>
<p>{{$usuario->id}}</p>

<h6><b>fecha_solicitud</b></h6>
<p>{{$usuario->fecha_solicitud}}</p>

<h6><b>fecha_prestamo</b></h6>
<p>{{$usuario->fecha_prestamo}}</p>

<h6><b>fecha_devolución</b></h6>
<p>{{$usuario->fecha_devolución}}</p>

<h6><b>libro_id</b></h6>
<p>{{$usuario->libro_id}}</p>

<h6><b>Prestamo_id</b></h6>
<p>{{$usuario->Prestamo_id}}</p>
@endsection()
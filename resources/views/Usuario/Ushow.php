@extends('Plantilla.plantilla')  {{-- ESTA PARTE SIEMPRE VA--}}

@section('titulo','show') {{-- ESTA PARTE SIEMPRE VA--}}

@section('contenido') {{-- ESTA PARTE SIEMPRE VA--}}

<h1><center>Mostrar Los Usuarios Individuales (SHOW)</center></h1>

<h6><b>ID</b></h6>
<p>{{$usuario->id}}</p>

<h6><b>nombre</b></h6>
<p>{{$usuario->nombre}}</p>

<h6><b>correo_electronico</b></h6>
<p>{{$usuario->correo_electronico}}</p>

<h6><b>telefono</b></h6>
<p>{{$usuario->telefono}}</p>

<h6><b>dirección</b></h6>
<p>{{$usuario->dirección}}</p>
@endsection()
@extends('Plantilla.plantilla')  {{-- ESTA PARTE SIEMPRE VA--}}

@section('titulo','create') {{-- ESTA PARTE SIEMPRE VA--}}

@section('contenido') {{-- ESTA PARTE SIEMPRE VA--}}

<h1>Cracion de Prestamo(CREATE)</h1>

@if ($errors->any())                                              {{-- ESTA ES LA ALERTA DE LAS VALIDACIONE--}}
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{route('Prestamos.crear')}}">
@csrf {{-- ESTO SI NO SE PONE NO DA EL CREATE TIRA ERROR 404--}}

<div>
fechaSolicitud
<input type="text" name="fechaSolicitud" id="fechaSolicitud" placeholder="Ingrese El fechaSolicitud" value="{{old('fechaSolicitud') ?? $libro->fechaSolicitud}}">
</div>

<br>
<div>
fechaPrestamo
<input type="text" name="fechaPrestamo" id="fechaPrestamo" placeholder="Ingrese El fechaPrestamo" value="{{old('fechaPrestamo') ?? $libro->fechaPrestamo}}">
</div>

<br>
<div>
fechaDevolucion
<input type="text" name="fechaDevolucion" id="fechaDevolucion" placeholder="Ingrese El Correo" value="{{old('fechaDevolucion') ?? $libro->fechaDevolucion}}">
</div>

<br>
<div>
libroId
<input type="text" name="libroId" id="libroId" placeholder="Ingrese el libroId" value="{{old('libroId') ?? $libro->libroId}}">
</div>

<br>
<div>
usuarioId
<input type="text" name="usuarioId" id="usuarioId" placeholder="Ingrese el usuarioId" value="{{old('usuarioId') ?? $libro->usuarioId}}">
</div>

<br>
<div>
<input type="submit" value="Guardar">
</div>


</form>

@endsection()
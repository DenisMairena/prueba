@extends('Plantilla.plantilla')  {{-- ESTA PARTE SIEMPRE VA--}}

@section('titulo','edit') {{-- ESTA PARTE SIEMPRE VA--}}

@section('contenido') {{-- ESTA PARTE SIEMPRE VA--}}

<h1>Editar de Contacto (Ediat)</h1>

@if ($errors->any())                                  {{-- ESTA ES LA ALERTA DE LAS VALIDACIONE--}}
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{route('libros.update',[$libros->id])}}">
@method("PUT") {{-- Esto se pone siempre --}}
@csrf {{-- ESTO SI NO SE PONE NO DA EL CREATE TIRA ERROR 404--}}

<div>
Titulo
<input type="text" name="título" id="título" placeholder="Ingrese El Título" value="{{old('título') ?? $libro->título}}">
</div>

<br>
<div>
Autor
<input type="text" name="autor" id="autor" placeholder="Ingrese El autor" value="{{old('autor') ?? $libro->autor}}">
</div>

<br>
<div>
Editorial
<input type="text" name="editorial" id="editorial" placeholder="Ingrese El Correo" value="{{old('editorial') ?? $libro->editorial}}">
</div>

<br>
<div>
anioPublicacion
<input type="text" name="anioPublicacion" id="anioPublicacion" placeholder="Ingrese La anioPublicacion" value="{{old('anioPublicacion') ?? $libro->anioPublicacion}}">
</div>

<br>
<div>
CantidadDisponible
<input type="text" name="cantidadDisponible" id="cantidadDisponible" placeholder="Ingrese La cantidadDisponible" value="{{old('cantidadDisponible') ?? $libro->cantidadDisponible}}">
</div>

<br>
<div>
<input type="submit" value="Guardar">
</div>

</form>

@endsection() {{-- ESTA PARTE SIEMPRE VA--}}
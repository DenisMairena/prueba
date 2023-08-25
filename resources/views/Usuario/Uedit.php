@extends('Plantilla.plantilla')  {{-- ESTA PARTE SIEMPRE VA--}}

@section('titulo','edit') {{-- ESTA PARTE SIEMPRE VA--}}

@section('contenido') {{-- ESTA PARTE SIEMPRE VA--}}

<h1>Editar El Usuario (Ediat)</h1>

@if ($errors->any())                                  {{-- ESTA ES LA ALERTA DE LAS VALIDACIONE--}}
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{route('usuarios.update',[$usuarios->id])}}">
@method("PUT") {{-- Esto se pone siempre --}}
@csrf {{-- ESTO SI NO SE PONE NO DA EL CREATE TIRA ERROR 404--}}

<div>
Titulo
<input type="text" name="nombre" id="nombre" placeholder="Ingrese El nombre" value="{{old('nombre') ?? $libro->nombre}}">
</div>

<br>
<div>
correoElectronico
<input type="text" name="correoElectronico" id="correoElectronico" placeholder="Ingrese El correoElectronico" value="{{old('correoElectronico') ?? $libro->correoElectronico}}">
</div>

<br>
<div>
telefono
<input type="text" name="telefono" id="telefono" placeholder="Ingrese El Correo" value="{{old('telefono') ?? $libro->telefono}}">
</div>

<br>
<div>
direccion
<input type="text" name="direccion" id="direccion" placeholder="Ingrese La direccion" value="{{old('direccion') ?? $libro->direccion}}">
</div>
<br>
<div>
<input type="submit" value="Guardar">
</div>

</form>

@endsection() {{-- ESTA PARTE SIEMPRE VA--}}
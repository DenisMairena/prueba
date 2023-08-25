@extends('Plantilla.plantilla')  {{-- ESTA PARTE SIEMPRE VA--}}

@section('titulo','index') {{-- ESTA PARTE SIEMPRE VA--}}

@section('contenido') {{-- ESTA PARTE SIEMPRE VA--}}

<h1><center>Tabla de Usuarios (index)</center></h1>

<button><center><a class="btn btn" href= "{{route('Usuarios.crear')}}"><u>Crear</u></a></center></button>

<table class="table" class="pagination">
    <thead>
        <th>id</th>
        <th>nombre</th>
        <th>correo_electronico</th>
        <th>telefono</th>
        <th>dirección</th>
    </thead>
    <tbody>
        @forelse($Usuarios as $Usuario) {{-- ESTA PARTE SIEMPRE VA--}}
        <tr>
        <td><a href= "{{route('Usuarios.show', ['id'=>$Usuario->id])}}" >{{$Usuario->id}}</a></td>  
        <td>{{$Usuario->nombre}}</td> {{-- ESTOS SON LOS DATOS DE LA TABLA(MIGRACION) --}}
        <td>{{$Usuario->correoElectronico}}</td>
        <td>{{$Usuario->telefono}}</td>
        <td>{{$Usuario->direccion}}</td>
        <td><a href= "{{route('Usuarios.editar', ['id'=>$Usuario->id])}}" >EDITAR</a></td>  
        
        <td>
        <form  method="post" action="{{route('Usuarios.borrar',[$Usuario->id])}}">
        @method("DELETE")
        @csrf
         <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
        </td>
         
        </tr>
        @empty {{-- EL EMPTY SOLO MUESTRA UNA TABLA CUANDO NO AHI DATOS--}}
        <tr>
            <td>No Se Encuentran Usuarios</td>
        </tr>
        @endforelse {{-- ESTA PARTE SIEMPRE VA--}}

    </tbody>
</table>

{{ $Usuarios->render('pagination::bootstrap-4') }} {{-- ESTO SE PONE PARA QUE NO TENGAN EL ERROR DE JUNIUR --}}

@endsection() {{-- ESTA PARTE SIEMPRE VA--}}
@extends('Plantilla.plantilla')  {{-- ESTA PARTE SIEMPRE VA--}}

@section('titulo','index') {{-- ESTA PARTE SIEMPRE VA--}}

@section('contenido') {{-- ESTA PARTE SIEMPRE VA--}}

<h1><center>Tabla de Libros (index)</center></h1>

<button><center><a class="btn btn" href= "{{route('libros.crear')}}"><u>Crear</u></a></center></button>

<table class="table" class="pagination">
    <thead>
        <th>id</th>
        <th>título</th>
        <th>autor</th>
        <th>editorial</th>
        <th>año_publicación</th>
        <th>cantidad_disponible</th>
       

    </thead>
    <tbody>
        @forelse($libros as $libro) {{-- ESTA PARTE SIEMPRE VA--}}
        <tr>
        <td><a href= "{{route('libros.show', ['id'=>$libro->id])}}" >{{$libro->id}}</a></td>  
        <td>{{$libro->titulo}}</td> {{-- ESTOS SON LOS DATOS DE LA TABLA(MIGRACION) --}}
        <td>{{$libro->autor}}</td>
        <td>{{$libro->editorial}}</td>
        <td>{{$libro->anioPublicacion}}</td>
        <td>{{$libro->cantidadDisponible}}</td>
        <td><a href= "{{route('libros.editar', ['id'=>$libro->id])}}" >EDITAR</a></td>  
        
        <td>
        <form  method="post" action="{{route('libros.borrar',[$libro->id])}}">
        @method("DELETE")
        @csrf
         <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
        </td>
         
        </tr>
        @empty {{-- EL EMPTY SOLO MUESTRA UNA TABLA CUANDO NO AHI DATOS--}}
        <tr>
            <td>No Se Encuentran libros</td>
        </tr>
        @endforelse {{-- ESTA PARTE SIEMPRE VA--}}

    </tbody>
</table>

{{ $libros->render('pagination::bootstrap-4') }} {{-- ESTO SE PONE PARA QUE NO TENGAN EL ERROR DE JUNIUR --}}

@endsection() {{-- ESTA PARTE SIEMPRE VA--}}
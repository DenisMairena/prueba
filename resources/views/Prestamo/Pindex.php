@extends('Plantilla.plantilla')  {{-- ESTA PARTE SIEMPRE VA--}}

@section('titulo','index') {{-- ESTA PARTE SIEMPRE VA--}}

@section('contenido') {{-- ESTA PARTE SIEMPRE VA--}}

<h1><center>Tabla de Prestamos (index)</center></h1>

<button><center><a class="btn btn" href= "{{route('Prestamos.crear')}}"><u>Crear</u></a></center></button>

<table class="table" class="pagination">
    <thead>
        <th>id</th>
        <th>fecha_solicitud</th>
        <th>fecha_prestamo</th>
        <th>fecha_devolución</th>
        <th>libro_id</th>
        <th>Prestamo_id</th>
    </thead>
    <tbody>
        @forelse($Prestamos as $Prestamo) {{-- ESTA PARTE SIEMPRE VA--}}
        <tr>
        <td><a href= "{{route('Prestamos.show', ['id'=>$Prestamo->id])}}" >{{$Prestamo->id}}</a></td>  
        <td>{{$Prestamo->fechaSolicitud}}</td> {{-- ESTOS SON LOS DATOS DE LA TABLA(MIGRACION) --}}
        <td>{{$Prestamo->fechaPrestamo}}</td>
        <td>{{$Prestamo->fechaDevolucion}}</td>
        <td>{{$Prestamo->libroId}}</td>
        <td>{{$Prestamo->usuarioId}}</td>
        <td><a href= "{{route('Prestamos.editar', ['id'=>$Prestamo->id])}}" >EDITAR</a></td>  
        
        <td>
        <form  method="post" action="{{route('Prestamos.borrar',[$Prestamo->id])}}">
        @method("DELETE")
        @csrf
         <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
        </td>
         
        </tr>
        @empty {{-- EL EMPTY SOLO MUESTRA UNA TABLA CUANDO NO AHI DATOS--}}
        <tr>
            <td>No Se Encuentran Prestamos</td>
        </tr>
        @endforelse {{-- ESTA PARTE SIEMPRE VA--}}

    </tbody>
</table>

{{ $Prestamos->render('pagination::bootstrap-4') }} {{-- ESTO SE PONE PARA QUE NO TENGAN EL ERROR DE JUNIUR --}}

@endsection() {{-- ESTA PARTE SIEMPRE VA--}}
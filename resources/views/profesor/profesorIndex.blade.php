@extends('layouts.temp')

@section('contenido')
    <h1>Listado de profesores</h1>

    <p>
        <a href="{{ route('profesor.create') }}">Agregar profesor</a>
    </p>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Profesor</th>
                <th>Clave de la materia</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($profesors as $profesor)
                <tr>
                    <td>
                        <a href={{ route('profesor.show', $profesor->id) }}}}>{{$profesor->id}}</a>
                        
                    </td>
                    <td>{{$profesor->nombre}}</td>
                    <td>{{$profesor->claveMateria}}</td>
                    <td>
                        <a href="{{route('profesor.edit', $profesor)}}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
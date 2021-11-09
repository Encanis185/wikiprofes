@extends('layouts.temp')

@section('contenido')
    <h1>Mostrar profesor</h1>

    <p>
        <a href="{{ route('profesor.index') }}">Listado de profesores</a>
    </p>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Profesor</th>
                <th>Clave de la materia</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{$profesor->id}}</td>
                    <td>{{$profesor->nombre}}</td>
                    <td>{{$profesor->claveMateria}}</td>
                </tr>
        </tbody>
    </table>

    <form action="{{ route('profesor.destroy', $profesor)}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar Profesor">
    </form>

@endsection
@extends('layouts.temp')

@section('contenido')
    <h1>Formulario de profesores</h1>

    <p>
        <a href="{{ route('profesor.index') }}">Listado de profesores</a>
    </p>

    @if(isset($profesor))
        <form action="{{ route('profesor.update', $profesor)}}" method="POST">  
            @method('PATCH')  
    @else
        <form action="{{ route('profesor.store')}}" method="POST">
    @endif

        @csrf
        <label for="nombre">Nombre del profesor:</label>
        <input type="text" name="nombre" id="nombre" value="{{$profesor->nombre ?? ''}}">
        <br>

        <label for="claveMateria">Clave de la materia que imparte:</label>
        <input type="text" name="claveMateria" id="claveMateria" value="{{$profesor->claveMateria ?? ''}}">
        <br>
        <input type="submit" value="Guardar">
    </form>
@endsection
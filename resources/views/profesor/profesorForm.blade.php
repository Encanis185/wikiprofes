@extends('layouts.temp')

@section('contenido')
    <h1>Formulario de profesores</h1>
    
    <form action="{{ route('profesor.store')}}" method="POST">
        @csrf()
        <label for="nombre">Nombre del profesor:</label>
        <input type="text" name="nombre" id="nombre">
        <br>

        <label for="claveMateria">Clave de la materia que imparte:</label>
        <input type="text" name="claveMateria" id="claveMateria">
        <br>
        <input type="submit" value="Guardar">
    </form>
@endsection
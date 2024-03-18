<!-- resources/views/students/confirm-delete.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>¿Estás seguro que quieres borrar el siguiente alumno?</h1>
    <p>Nombre: {{ $student->nombre_completo }}</p>
    <p>DNI/NIE: {{ $student->dni_nie }}</p>
    <p>Fecha de Nacimiento: {{ $student->fecha_nacimiento }}</p>

    <form action="{{ route('destroy', $student->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Confirmar Borrado</button>
    </form>
@endsection

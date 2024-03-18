<!-- resources/views/students/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Detalles del Estudiante</h1>
    <p>Nombre: {{ $student->nombre_completo }}</p>
    <p>DNI/NIE: {{ $student->dni_nie }}</p>
    <p>Fecha de Nacimiento: {{ $student->fecha_nacimiento }}</p>
    <p>Fecha de Creacion: {{ $student->created_at }}</p>
    <p>Fecha de Actualizacion: {{ $student->updated_at }}</p>
@endsection

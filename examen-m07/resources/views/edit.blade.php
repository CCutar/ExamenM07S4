<!-- resources/views/students/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Editar Estudiante</h1>
    <form action="{{ route('update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre_completo">Nombre Completo</label>
            <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" value="{{ $student->nombre_completo }}">
        </div>
        <div class="form-group">
            <label for="dni_nie">DNI/NIE</label>
            <input type="text" class="form-control" id="dni_nie" name="dni_nie" value="{{ $student->dni_nie }}">
        </div>
        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $student->fecha_nacimiento }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
@endsection

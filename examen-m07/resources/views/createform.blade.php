@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Estudiante</h1>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre_completo">Nombre Completo</label>
            <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" required>
        </div>
        <div class="form-group">
            <label for="dni_nie">DNI/NIE</label>
            <input type="text" class="form-control" id="dni_nie" name="dni_nie" required>
        </div>
        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear Estudiante</button>
    </form>
@endsection

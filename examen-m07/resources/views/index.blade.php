@extends('layouts.app')

@section('content')
    <h1>Listado de Alumnos</h1>
    <a href="{{ route('create') }}" class="btn btn-success mb-3">Crear Alumno</a>
    <table>
        <thead>
            <tr>
                <th>Nombre Completo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->nombre_completo }}</td>
                    <td>
                        <a href="{{ route('show', $student->id) }}" class="btn btn-primary">Detalles</a>
                        <a href="{{ route('edit', $student->id) }}" class="btn btn-warning">Editar</a>
                        <a href="{{ route('confirm-delete', $student->id) }}" class="btn btn-danger">Borrar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('index', compact('students'));
    }

    public function show(Student $student)
    {
        return view('show', compact('student'));
    }

    public function confirmDelete(Student $student)
    {
        return view('confirm-delete', compact('student'));
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('index')->with('success', 'Estudiante borrado exitosamente');
    }

    public function edit(Student $student)
    {
        return view('edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nombre_completo' => 'required|string',
            'dni_nie' => 'required|string|unique:students,dni_nie,' . $student->id,
            'fecha_nacimiento' => 'required|date',
        ]);

        $student->update($request->all());

        return redirect()->route('index')->with('success', 'Estudiante actualizado exitosamente');
    }

    public function create(Student $student)
    {
        return view('createform', compact('student'));
    }

    public function store(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'dni_nie' => 'required|unique:students',
            'nombre_completo' => 'required|unique:students',
            'fecha_nacimiento' => 'required|date',
        ]);

        // Verificar si ya existe un alumno con el mismo DNI/NIE
        $existingStudent = Student::where('dni_nie', $request->dni_nie)->first();

        if ($existingStudent) {
            return redirect()->back()->withErrors(['dni_nie' => 'Ya existe un alumno con este DNI/NIE.'])->withInput();
        }

        // Verificar si ya existe un alumno con el mismo nombre completo
        $existingStudent = Student::where('nombre_completo', $request->nombre_completo)->first();

        if ($existingStudent) {
            return redirect()->back()->withErrors(['nombre_completo' => 'Ya existe un alumno con este nombre completo.'])->withInput();
        }

        // Si no hay duplicados, crear el alumno
        $student = new Student();
        $student->dni_nie = $request->dni_nie;
        $student->nombre_completo = $request->nombre_completo;
        $student->fecha_nacimiento = $request->fecha_nacimiento;
        $student->save();

        // Redirigir al usuario a la página de listado de alumnos
        return redirect()->route('index')->with('success', 'Alumno creado correctamente.');
    }




}

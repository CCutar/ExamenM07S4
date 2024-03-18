<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            Student::create([
                'dni_nie' => $this->generateRandomDniNie(),
                'nombre_completo' => $this->generateRandomName(),
                'fecha_nacimiento' => $this->generateRandomDateOfBirth(),
            ]);
        }
    }

    private function generateRandomDniNie()
    {
    // Generar un número aleatorio de 9 dígitos como DNI/NIE
    return str_pad(rand(1, 999999999), 9, '0', STR_PAD_LEFT);
    }

    private function generateRandomName()
    {
    $nombres = ['Juan', 'María', 'Pedro', 'Luisa', 'Carlos', 'Ana', 'José', 'Laura', 'Diego', 'Sofía'];
    return $nombres[array_rand($nombres)];
    }

    private function generateRandomDateOfBirth()
    {
        // Lógica para generar una fecha de nacimiento aleatoria
        return now()->subYears(rand(18, 30))->subMonths(rand(0, 11))->subDays(rand(0, 30));
    }
}

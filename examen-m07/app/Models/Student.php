<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = ['dni_nie', 'nombre_completo', 'fecha_nacimiento'];

    protected $guarded = ['created_at', 'updated_at'];

    public $timestamps = true;
}

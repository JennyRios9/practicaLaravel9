<?php

namespace App\Models\Empleado;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    public function cargoEmpleado(){
        return $this->belongsTo(Cargo::class, 'idCargo');
    }
}

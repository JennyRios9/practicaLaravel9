<?php

namespace App\Models\Empleado;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $guarded = []; // así lo vamos a dejar
    use HasFactory;

    public function cargoEmpleado(){
        return $this->belongsTo(Cargo::class, 'idCargo');
    }
}

<?php

namespace Database\Seeders;

use App\Models\Empleado\Cargo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //esta clase la debo importar
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Cargos_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargos')->insert([
            'nombre'=> 'Instructor',
        ]);
    
        DB::table('cargos')->insert([
            'nombre'=> 'Director',
        ]);
    
        DB::table('cargos')->insert([
            'nombre'=> 'Coordinador',
        ]);
    }
}

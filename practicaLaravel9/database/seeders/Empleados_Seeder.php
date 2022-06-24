<?php

namespace Database\Seeders;

use App\Models\Empleado\Empleado;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Empleados_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cargo = DB::table('cargos')->where(['nombre'=>'Instructor'])->value('id');

        DB::table('empleados')->insert([
            'nombre'=> 'Dony Cardenas',
            'email' => 'cardenasdonny@gmail.com',
            'direccion' => 'calle 123456',
            'edad' => 36,
            'idCargo' => $cargo
        ]);

        DB::table('empleados')->insert([
            'nombre'=> 'Jorge',
            'email' => 'jorge@gmail.com',
            'direccion' => 'calle 123',
            'edad' => 63,
            'idCargo' => 2
        ]);

        DB::table('empleados')->insert([
            'nombre'=> 'Samuel',
            'email' => 'samuel@gmail.com',
            'direccion' => 'calle 556611',
            'edad' => 54,
            'idCargo' => 1
        ]);
        DB::table('empleados')->insert([
            'nombre'=> 'Arelys',
            'email' => 'arelis@gmail.com',
            'direccion' => 'calle 443311',
            'edad' => 28,
            'idCargo' => 3
        ]);
    }
}


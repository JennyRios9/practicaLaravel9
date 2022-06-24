<?php

namespace Database\Seeders;

use App\Models\Empleado\Cargo;
use App\Models\Empleado\Empleado;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

       
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // se eliminan las llaves FK
        DB::table('cargos')->truncate(); // se borra la tabla
        DB::table('empleados')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // se activan las Fk
        $this->call(Cargos_Seeder::class); // Se crea la tabla y se llena
        $this->call(Empleados_Seeder::class);

        

    }
}

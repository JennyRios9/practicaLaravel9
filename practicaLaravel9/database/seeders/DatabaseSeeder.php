<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        $this->call(Cargos_Seeder::class);

     DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // se eliminan las llaves FK
    DB::table('cargo')->truncate(); // se borra la tabla
    DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // se activan las Fk
    $this->call(Cargos_Seeder::class); // Se crea la tabla y se llena
    }
}

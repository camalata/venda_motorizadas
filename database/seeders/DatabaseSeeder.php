<?php

namespace Database\Seeders;

use App\Models\Administrador;
use App\Models\User;
use App\Models\Cliente;
use App\Models\Marca;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user =  User::factory()->create([
            'name' => 'Administrador de testes',
            'email' => 'admin@admin.com', // password
            'role' => 'admin',
        ]);

        Administrador::make([
            'user_id' => $user->id
        ]);

        $user =  User::factory()->create([
            'name' => 'Cliente de testes',
            'email' => 'cliente@cliente.com',
        ]);

        $faker = \Faker\Factory::create();

        Cliente::create([
            'user_id' => $user->id,
            'bi' => $faker->unique()->ean13(),
            'localizacao' => $faker->address(),
        ]);

        $this->call([
            // AdministradorSeeder::class,
            // ClienteSeeder::class,
            MarcaSeeder::class,
            // ModeloSeeder::class,
            // MotaSeeder::class,
            // ReservaSeeder::class,
        ]);
    }
}

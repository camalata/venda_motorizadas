<?php

namespace Database\Seeders;

use App\Models\Administrador;
use App\Models\User;
use App\Models\Cliente;
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
            'email' => 'admin@admin.com',
        ]);

        Administrador::make([
            'user_id' => $user->id
        ]);

        $user =  User::factory()->create([
            'name' => 'Cliente de testes',
            'email' => 'cliente@cliente.com',
        ]);

        Cliente::make([
            'user_id' => $user->id
        ]);

        $this->call([
            AdministradorSeeder::class,
            ClienteSeeder::class,
            MotaSeeder::class,
            ReservaSeeder::class,
        ]);
    }
}

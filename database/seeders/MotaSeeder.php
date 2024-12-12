<?php

namespace Database\Seeders;

use App\Models\Mota;
use Illuminate\Database\Seeder;

class MotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \faker\factory::create();

        foreach (range(1, 10) as $index) {
            Mota::factory()->create();
        }
    }
}

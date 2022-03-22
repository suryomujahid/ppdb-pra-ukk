<?php

namespace Database\Seeders;

use App\Models\Registrar;
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
        Registrar::factory(10)->create();
    }
}

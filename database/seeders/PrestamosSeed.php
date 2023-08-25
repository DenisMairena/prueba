<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrestamosSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Prestamo::factory(300)->create();
    }
}

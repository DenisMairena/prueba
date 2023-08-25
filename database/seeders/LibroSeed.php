<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibroSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Libro::factory(300)->create();
    }
}

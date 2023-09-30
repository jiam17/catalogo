<?php

namespace Database\Seeders;

ini_set('memory_limit', '-1');

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->run([
            UserSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            BillSeeder::class
        ]);
    }
}

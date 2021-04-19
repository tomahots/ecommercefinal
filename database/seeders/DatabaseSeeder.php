<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ProductoSeeder;
use Database\Seeders\AddUsers;
use Database\Seeders\ImagenSeeder;

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
        $this->call(ProductoSeeder::class);
        $this -> call (AddUsers::class);
        $this -> call (ProductoSeeder::class);
        $this -> call (ImagenSeeder::class);
    }
}

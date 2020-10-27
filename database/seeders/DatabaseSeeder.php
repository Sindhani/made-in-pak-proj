<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;

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
        //  \App\Models\Product::factory(10)->create();
        //factory(Product::class,12)->create();
        $this->call(ProductSeeder::class);    }
}

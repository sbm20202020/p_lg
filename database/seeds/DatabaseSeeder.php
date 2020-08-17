<?php

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
     $this->call(ProduitSeeder::class);
     $this->call(ItemSeeder::class);
    }

}

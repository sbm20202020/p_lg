<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker= Faker\Factory::create();

for($i=0;$i <= 20 ;$i++)
{
Item::create([
    'nom'=>$faker->sentence(1),
    'description'=>$faker->sentence(4),
    'produit_id'=>$faker->numberBetween(1,5),
    'prix'=>$faker->numberBetween(100,1000)

]);
}
    }
}

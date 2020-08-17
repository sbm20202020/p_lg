<?php

use Illuminate\Database\Seeder;
use App\Produit;
class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker\Factory::create();
for($i=0;$i <= 4 ;$i++)
{
Produit::create([
    'nom'=>$faker->sentence(1),
    'description'=>$faker->sentence(4),
    'promotion'=>$faker->sentence(5),
    'type_produit'=>$faker->text,
    'nom_image' => $faker->sentence(1)


]);
}
    }
}

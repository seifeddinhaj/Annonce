<?php

use Illuminate\Database\Seeder;
use app\Annonce;
class AnnonceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Annonce::count() == 0) {
        $annoces = array(
            array('title' => 'Mercedes c200','price' => 250000,'description' => 'new one','type' => 'for sale','adresse' => 'Sousse','user_id' => 1,'categories_id' => 1,'subcategory_id' => 1),
            array('title' => 'bmw M3','price' => 555555,'description' => 'm power ','type' => 'for sale','adresse' => 'Sousse','user_id' => 1,'categories_id' => 1,'subcategory_id' => 1),
            array('title' => 'Mercedes c200','price' => 250000,'description' => 'new one','type' => 'for sale','adresse' => 'Sousse','user_id' => 1,'categories_id' => 1,'subcategory_id' => 1),
            array('title' => 'bmw M3','price' => 555555,'description' => 'm power ','type' => 'for sale','adresse' => 'Sousse','user_id' => 1,'categories_id' => 1,'subcategory_id' => 1),
        );

            DB::table('annonces')->insert($annoces);
        }

    }
}
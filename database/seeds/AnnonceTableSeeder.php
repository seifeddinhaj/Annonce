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
<<<<<<< HEAD

=======
>>>>>>> 7484d9f34d4364113f2d9c70bfa94ca4e47b19ce
        $annoces = array(
            array('title' => 'Mercedes c200','price' => 250000,'description' => 'new one','type' => 'for sale','adresse' => 'Sousse','user_id' => 1,'categories_id' => 1,'subcategory_id' => 1),
            array('title' => 'bmw M3','price' => 555555,'description' => 'm power ','type' => 'for sale','adresse' => 'Sousse','user_id' => 1,'categories_id' => 1,'subcategory_id' => 1),
            array('title' => 'Mercedes c200','price' => 250000,'description' => 'new one','type' => 'for sale','adresse' => 'Sousse','user_id' => 1,'categories_id' => 1,'subcategory_id' => 1),
            array('title' => 'bmw M3','price' => 555555,'description' => 'm power ','type' => 'for sale','adresse' => 'Sousse','user_id' => 1,'categories_id' => 1,'subcategory_id' => 1),
        );

            DB::table('annonces')->insert($annoces);
<<<<<<< HEAD

=======
>>>>>>> 7484d9f34d4364113f2d9c70bfa94ca4e47b19ce

    }
}

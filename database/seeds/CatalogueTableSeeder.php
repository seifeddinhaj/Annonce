<?php

use Illuminate\Database\Seeder;
use app\Catalog;
class CatalogueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD

        $catalog = array(
=======
        
        $catalogg = array(
>>>>>>> fa5d6077421669d1cd53cabd337dad92ac1a7e32
            array('urlimg' => 'annonceImg/merc.jpg','annonce_id' => 1),
            array('urlimg' => 'annonceImg/merc.jpg','annonce_id' => 1),
            array('urlimg' => 'annonceImg/bmw.jpg' ,'annonce_id' => 2),
            array('urlimg' => 'annonceImg/bmw.jpg' ,'annonce_id' => 2),
            array('urlimg' => 'annonceImg/merc.jpg' ,'annonce_id' => 3),
            array('urlimg' => 'annonceImg/merc.jpg','annonce_id' => 3),
            array('urlimg' => 'annonceImg/bmw.jpg' ,'annonce_id' => 4),
            array('urlimg' => 'annonceImg/bmw.jpg','annonce_id' => 4),
        );
<<<<<<< HEAD
            DB::table('catalog')->insert($catalog);

=======
            DB::table('catalog')->insert($catalogg);
        
>>>>>>> fa5d6077421669d1cd53cabd337dad92ac1a7e32
}
}
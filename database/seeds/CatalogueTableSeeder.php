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
        $catalog = array(
>>>>>>> 7484d9f34d4364113f2d9c70bfa94ca4e47b19ce
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
            DB::table('catalog')->insert($catalog);

>>>>>>> 7484d9f34d4364113f2d9c70bfa94ca4e47b19ce
}
}
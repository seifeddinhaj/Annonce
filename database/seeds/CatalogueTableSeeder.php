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
        if (Catalog::count() == 0) {
        $catalog = array(
            array('urlimg' => 'annonceImg/merc.jpg','annonce_id' => 1),
            array('urlimg' => 'annonceImg/merc.jpg','annonce_id' => 1),
            array('urlimg' => 'annonceImg/bmw.jpg' ,'annonce_id' => 2),
            array('urlimg' => 'annonceImg/bmw.jpg' ,'annonce_id' => 2),
            array('urlimg' => 'annonceImg/merc.jpg' ,'annonce_id' => 3),
            array('urlimg' => 'annonceImg/merc.jpg','annonce_id' => 3),
            array('urlimg' => 'annonceImg/bmw.jpg' ,'annonce_id' => 4),
            array('urlimg' => 'annonceImg/bmw.jpg','annonce_id' => 4),
        );
            DB::table('catalog')->insert($catalog);
        }
}
}
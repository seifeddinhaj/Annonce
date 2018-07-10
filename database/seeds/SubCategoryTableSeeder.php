<?php

use Illuminate\Database\Seeder;

class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
            $subcategories1 = array(
                array('type' => 'Cars','categories_id' => 1),
                array('type' => 'Motorcycless','categories_id' => 1),
                array('type' => 'Vehicle Parts and Accessories' ,'categories_id' => 1),
                array('type' => 'Boats' ,'categories_id' => 1),
                array('type' => 'Trailers and Caravans' ,'categories_id' => 1),
                array('type' => 'Agricultural machinery','categories_id' => 1),
                array('type' => 'Trucks' ,'categories_id' => 1),
               );
               DB::table('subcategory')->insert($subcategories1);

               $subcategories2 = array(
                array('type' => 'Appartements','categories_id' => 2),
                array('type' => 'Houses and Villas','categories_id' => 2),
                array('type' => 'Holiday rents' ,'categories_id' => 2),
                array('type' => 'Offices and Trays' ,'categories_id' => 2),
                array('type' => 'Shops and industrial premises' ,'categories_id' => 2),
                array('type' => 'Land and Farms','categories_id' => 2),
                array('type' => 'Housemates' ,'categories_id' => 2),
               );
                DB::table('subcategory')->insert($subcategories2);



                $subcategories3 = array(
                    array('type' => 'Household Appliances and Dishes','categories_id' => 3),
                    array('type' => 'Furniture and Decoration','categories_id' => 3),
                    array('type' => 'Garden and DIY Tools' ,'categories_id' => 3),
                    
                   );
                    DB::table('subcategory')->insert($subcategories3);
    }
}

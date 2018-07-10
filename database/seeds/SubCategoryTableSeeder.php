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



                    $subcategories4 = array(
                        array('type' => 'bicycles','categories_id' => 4),
                array('type' => 'Sports and leisures','categories_id' => 4),
                array('type' => 'Animals' ,'categories_id' => 4),
                array('type' => 'Movies, Books, Magazines' ,'categories_id' => 4),
                array('type' => 'Travel and Ticketing' ,'categories_id' => 4),
                array('type' => 'Art and Collections','categories_id' => 4),
                array('type' => 'Musical instruments' ,'categories_id' => 4),
                        
                       );
                        DB::table('subcategory')->insert($subcategories4);



                        $subcategories5= array(
                            array('type' => 'Phones','categories_id' => 5),
                    array('type' => 'Image & Sound','categories_id' => 5),
                    array('type' => 'Laptop' ,'categories_id' => 5),
                    array('type' => 'Computer accessories and Gadgets' ,'categories_id' => 5),
                    array('type' => 'Video Games and Consoles' ,'categories_id' => 5),
                    array('type' => 'Cameras','categories_id' => 5),
                    array('type' => 'Tablets' ,'categories_id' => 5),
                    array('type' => 'Televisions' ,'categories_id' => 5),
                            
                           );
                            DB::table('subcategory')->insert($subcategories5);



                            $subcategories6= array(
                                array('type' => 'Clothing','categories_id' => 6),
                        array('type' => 'Shoes','categories_id' => 6),
                        array('type' => 'Watches and Jewelry' ,'categories_id' => 6),
                        array('type' => 'Bags and Accessories' ,'categories_id' => 6),
                        array('type' => 'Child and baby clothes' ,'categories_id' => 6),
                        array('type' => 'Equipment for child and baby','categories_id' => 6),
                        array('type' => 'Beauty products' ,'categories_id' => 6),
                      
                                
                               );
                                DB::table('subcategory')->insert($subcategories6);

                 $subcategories7 = array(
                 array('type' => 'Business and Commercial Affairs','categories_id' => 7),
                array('type' => 'Professional Materials','categories_id' => 7),
                array('type' => 'Stocks and Wholesale' ,'categories_id' => 7),
                                    
                    );
                 DB::table('subcategory')->insert($subcategories7);
               
                 


                 $subcategories8 = array(
                    array('type' => 'Jobs','categories_id' => 8),
                   array('type' => 'Job applications','categories_id' => 8),
                   array('type' => 'Services' ,'categories_id' => 8),
                   array('type' => 'Courses and Training' ,'categories_id' => 8),                  
                       );
                    DB::table('subcategory')->insert($subcategories8);
    }
}

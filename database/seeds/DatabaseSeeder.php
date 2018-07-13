<?php

use Illuminate\Database\Seeder;
use app\Category;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CategoriesTableSeeder::class);
         $this->call(SubCategoryTableSeeder::class);
         $this->call(AnnonceTableSeeder::class);
         $this->call(CatalogueTableSeeder::class);
    }
}

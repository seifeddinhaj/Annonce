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
<<<<<<< HEAD

=======
>>>>>>> 7484d9f34d4364113f2d9c70bfa94ca4e47b19ce
    }
}

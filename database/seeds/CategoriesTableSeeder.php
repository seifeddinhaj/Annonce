<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;
use app\Categories;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {  
        
        if (Categories::count() == 0) {
        $categories = array(
        array('type' => 'vehicles','Icon' => 'default'),
        array('type' => 'Buildings','Icon' => 'default'),
        array('type' => 'For the House and Garden' ,'Icon' => 'default'),
        array('type' => 'Leisure and Entertainment' ,'Icon' => 'default'),
        array('type' => 'Computer and Multimedia' ,'Icon' => 'default'),
        array('type' => 'Clothing and Well Being','Icon' => 'default'),
        array('type' => 'Entreprises' ,'Icon' => 'default'),
        array('type' => 'Employment and Services','Icon' => 'default'),);
        DB::table('categories')->insert($categories);
    
    }
    }

    /**
     * [dataRow description].
     *
     * @param [type] $type  [description]
     * @param [type] $field [description]
     *
     * @return [type] [description]
     */
    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
                'data_type_id' => $type->id,
                'field'        => $field,
            ]);
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Category;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('categories')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $date_category = [
            ['categories_id' => 1, 'name' => 'Direção Defensiva'], 
            ['categories_id' => 2, 'name' => 'Legislação'], 
            ['categories_id' => 3, 'name' => 'Mecânica'], 
            ['categories_id' => 4, 'name' => 'Meio ambiente'], 
            ['categories_id' => 5, 'name' => 'Primeiros socorros'], 
            ['categories_id' => 6, 'name' => 'Placas']
        ];
        Category::insert($date_category);
    }
}

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
            ['categories_id' => 2, 'name' => 'Processos de habilitação'], 
            ['categories_id' => 3, 'name' => 'Infrações e penalidades'], 
            ['categories_id' => 4, 'name' => 'Sinalização de trânsito'], 
            ['categories_id' => 5, 'name' => 'Normas de circulação'], 
            ['categories_id' => 6, 'name' => 'Primeiros socorros'],
            ['categories_id' => 7, 'name' => 'Meio ambiente e cidadania'],
            ['categories_id' => 8, 'name' => 'Mecânica básica de veículos']
        ];
        Category::insert($date_category);
    }
}

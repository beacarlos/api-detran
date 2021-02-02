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

        $date_category = [['name' => 'Direção Defensiva'], ['name' => 'Legislação'], ['name' => 'Mecânica'], ['name' => 'Meio ambiente'], ['name' => 'Primeiros socorros'], ['name' => 'Placas']];
        Category::insert($date_category);
    }
}

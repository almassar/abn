<?php

use Illuminate\Database\Seeder;
use App\Modules\Categories\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert(['name' => 'Внесение удобрений']);
        Category::insert(['name' => 'Посевная и посадочная техника']);
        Category::insert(['name' => 'Техника для обработки почвы']);
        Category::insert(['name' => 'Удобрение']);
        Category::insert(['name' => 'Запасные части']);
    }
}

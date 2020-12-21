<?php

use Illuminate\Database\Seeder;

use App\Modules\Types\Type;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::insert(['category_id' => 2, 'name' => 'Пневматические сеялки']);
        Type::insert(['category_id' => 2, 'name' => 'Компактные сеялки']);
        Type::insert(['category_id' => 2, 'name' => 'Механические сеялки']);
        Type::insert(['category_id' => 2, 'name' => 'Пропашные сеялки']);

        Type::insert(['category_id' => 3, 'name' => 'Вертикальная почвообработка']);
        Type::insert(['category_id' => 3, 'name' => 'Традиционная почвообработка']);

        Type::insert(['category_id' => 4, 'name' => 'Минеральные удобрения ИЗАГРИ']);
        Type::insert(['category_id' => 4, 'name' => 'Биопрепараты БИОСФЕРА']);
        Type::insert(['category_id' => 0, 'name' => '(пусто)']);
    }
}

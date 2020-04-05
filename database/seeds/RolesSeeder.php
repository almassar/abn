<?php

use Illuminate\Database\Seeder;
use App\Modules\Roles\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert(['name' => 'Администратор',  'slug' => 'admin']);
        Role::insert(['name' => 'Пользователь',    'slug' => 'user']);
    }
}

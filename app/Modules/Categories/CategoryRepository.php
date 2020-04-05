<?php

namespace App\Modules\Categories;

use App\Modules\Repositories\Repository;

abstract class CategoryRepository extends Repository
{
    abstract public function model();

    public function roots()
	{
	    return (static::model())::whereNull('parent_id')->get();
    }

}
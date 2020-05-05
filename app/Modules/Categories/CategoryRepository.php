<?php

namespace App\Modules\Categories;

use App\Modules\Repositories\Repository;

class CategoryRepository extends Repository
{
    public function model()
	{
		return Category::class;
	}

}
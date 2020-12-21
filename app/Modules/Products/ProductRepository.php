<?php

namespace App\Modules\Products;

use App\Modules\Repositories\Repository;
use Illuminate\Database\Eloquent\Builder;

class ProductRepository extends Repository
{
	public function model()
	{
		return Product::class;
	}
}
<?php

namespace App\Modules\CompanyCategories;

use App\Modules\Categories\CategoryRepository;

class CompanyCategoryRepository extends CategoryRepository
{
	public function model()
	{
		return CompanyCategory::class;
	}

}
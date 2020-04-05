<?php

namespace App\Modules\Companies;

use App\Modules\Repositories\Repository;
use Illuminate\Database\Eloquent\Builder;

class CompanyRepository extends Repository
{
	public function model()
	{
		return Company::class;
	}

    public function getByCityAndCategory($cityId, $categoryId)
    {
        $companies = Company::where('city_id', $cityId)->whereHas('categories', function (Builder $query) use ($categoryId) {
            $query->where('category_id', $categoryId);

        })->paginate();

        return $companies;
	}

}
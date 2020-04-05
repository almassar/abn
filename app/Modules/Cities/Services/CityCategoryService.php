<?php

namespace App\Modules\Cities\Services;

use App\Modules\Cities\City;

class CityCategoryService
{
    public $currentCity;

    public function __construct(City $currentCity)
    {
        $this->currentCity = $currentCity;
    }

    public function roots()
    {
        return $this->currentCity->companyCategories()->whereNull('parent_id')->get()->transform(function ($companyCategory) {
            return new CityCategory($companyCategory);
        });
    }
}

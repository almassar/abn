<?php

namespace App\Modules\Cities\Services;

use App\Modules\Categories\Category;
use App\Modules\CompanyCategories\CompanyCategory;

class CityCategory extends Category
{
    protected $table = 'city_company_category_pivot';

    public $company_category_id;
    public $slug;
    public $name;
    public $amount_company;

    public function __construct(CompanyCategory $companyCategory)
    {
        $this->company_category_id = $companyCategory->id;
        $this->slug = $companyCategory->slug;
        $this->name = $companyCategory->name;
        $this->amount_company = $companyCategory->pivot->amount_company;
    }

    public function children()
    {
        return $this->belongsToMany(CompanyCategory::class, 'city_company_category_pivot',
                'company_category_id', 'city_id'

            )->withPivot('amount_company');


        Типа такого
         $customers = Customer::whereHas('stores', function($query) use($storeId) {
        $query->where('stores.id', $storeId);
    })->get();

    }

    public function amount()
    {
        return $this->amount_company;
    }

}
<?php

namespace App\Modules\CompanyCategories;

use App\Modules\Categories\Category;
use App\Modules\Companies\Company;

/**
 * @property integer amount_company
 */
class CompanyCategory extends Category
{
    protected $table = 'company_categories';

    public function companies()
    {
		return $this->belongsToMany(Company::class, $this->table);
	}

    public function amount()
    {
        return $this->amount_company;
	}
}
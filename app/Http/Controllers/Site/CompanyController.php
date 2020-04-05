<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Modules\Categories\Category;
use App\Modules\Cities\City;
use App\Modules\Cities\CityRepository;
use App\Modules\Companies\Company;
use App\Modules\Companies\CompanyRepository;
use Illuminate\Http\Request;

class CompanyController extends SiteBaseController
{
    private $companyRepository;

    public function __construct(CompanyRepository $companyRepository)
    {
        parent::__construct();

        $this->companyRepository = $companyRepository;
    }

    public function getByCityAndCategory(City $city, Category $category)
    {
        $companies = $this->companyRepository->getByCityAndCategory($city->id, $category->id);

        $seo['title'] = $category->name.' г.'.$city->name.' - '.$companies->total().' компаниии';

        return view('site.companies')->with(compact('companies', 'seo', 'city', 'category'));
    }

    public function companyView(Company $company)
    {
        $seo['title'] = $company->name.' - '.$company->city->name;

        return view('site.company-view')->with(compact('company', 'seo'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Modules\Companies\CompanyRepository;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    private $companyRepository;

    public function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }

    public function index()
    {
        $seo['title'] = 'Компании';

        return view('admin.companies.index')->with(compact('seo', 'hasFileImport'));
    }
}

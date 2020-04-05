<?php

namespace App\Http\Controllers\Admin;

use App\Modules\Categories\CategoryRepository;
use App\Modules\CompanyCategories\CompanyCategoryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyCategoryController extends Controller
{
    private $companyCategoryRepository;
    
    public function __construct(CompanyCategoryRepository $companyCategoryRepository)
    {
        $this->companyCategoryRepository = $companyCategoryRepository;
    }

    public function index()
    {
        $seo['title'] = 'Категории';

        return view('admin.categories.index')->with(compact('seo'));
    }
}

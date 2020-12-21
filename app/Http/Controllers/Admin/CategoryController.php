<?php

namespace App\Http\Controllers\Admin;

use App\Modules\Categories\CategoryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    private $categoryRepository;
    
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $seo['title'] = 'Категории';

        $categories = $this->categoryRepository->get();

        return view('admin.categories.index')->with(compact('categories', 'seo'));
    }
}

<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Modules\Categories\Category;
use App\Modules\Products\Product;
use App\Modules\Products\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends SiteBaseController
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index(Category $category)
    {
        $seo['title'] = $category->name;
        
        $products = $this->productRepository->where(['category_id' => $category->id])->paginate();

        return view('site.products')->with(compact('products', 'category', 'seo'));
    }

    public function productView(Product $product)
    {
        $seo['title'] = $product->name;

        return view('site.product-view')->with(compact('product', 'seo'));
    }
}

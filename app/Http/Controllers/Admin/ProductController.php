<?php

namespace App\Http\Controllers\Admin;

use App\Modules\Products\Product;
use App\Modules\Products\ProductRepository;
use App\Modules\Categories\Category;
use App\Modules\Categories\CategoryRepository;
use App\Http\Controllers\Controller;
use App\Modules\Flash\Facades\Flash;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productRepository;
    private $categoryRepository;

    public function __construct(ProductRepository $productRepository, CategoryRepository $categoryRepository)
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index(Category $category = null)
    {
        $seo['title'] = 'Продукция';

        if (is_null($category))
            $products = $this->productRepository->paginate();
        else
            $products = $this->productRepository->where(['category_id' => $category->id])->paginate();

        $categories = $this->categoryRepository->get();


        return view('admin.products.index')->with(compact('products', 'categories', 'seo'));
    }

    public function form(Product $product = null)
    {
        $seo['title'] = ($product === null ?  'Добавление' : 'Редактирование').' продукции';

        $categories = $this->categoryRepository->get();
        
        return view('admin.products.form')->with(compact('product', 'categories', 'seo'));
    }

    public function save(Request $request, Product $product = null)
    {
        $data = $request->all();

        $product = $this->productRepository->save($data, $product);

        if ($request->has('image')) {
            $request->image->storeAs('public/products', $product->id.'.jpg');
        }

        Flash::success('Продукция успешно сохранена!');
        return redirect('admin/products');
    }

    public function delete(Product $product)
    {
        $this->productRepository->delete($product->id);

        Flash::success('Продукция успешно удалена!');
        return redirect('admin/product');
    }
}

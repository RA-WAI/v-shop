<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCreateRequest;
use App\Services\BrandService;
use App\Services\CategoryService;
use App\Services\ProductService;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function __construct(
        protected ProductService $productService,
        protected BrandService $brandService,
        protected CategoryService $categoryService,
    )
    {

    }
    /**
     * Get the products data
     *
     */
    public function index()
    {
        $brands = $this->brandService->all();
        $categories = $this->categoryService->all();
        $products = $this->productService->all();

        return Inertia::render('Admin/Product/Index', [
            'products' => $products,
            'brands' => $brands,
            'categories' => $categories,
        ]);
    }

    /**
     * Store product data
     * @param object $request
     */
    public function store(ProductCreateRequest $request)
    {
        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

}

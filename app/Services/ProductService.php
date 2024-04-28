<?php
namespace App\Services;

use App\Contracts\ProductRepositoryInterface;

class ProductService
{
    public function __construct(
        protected ProductRepositoryInterface $productRepository,
    ) {
    }

    /**
     * Return all products
     */
    public function all()
    {
        return $this->productRepository->all();
    }

    /**
     * Create new product
     * @param array $request
     */
    public function create($request)
    {
        return $this->productRepository->create($request);
    }
}

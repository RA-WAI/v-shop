<?php
namespace App\Services;

use App\Contracts\ProductRepositoryInterface;

class ProductService
{
    public function __construct(
        protected ProductRepositoryInterface $productRepository
    ) {
    }

    /**
     * Return all products
     */
    public function all()
    {
        return $this->productRepository->all();
    }
}

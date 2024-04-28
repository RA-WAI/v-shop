<?php
namespace App\Contracts;

interface ProductRepositoryInterface
{
    /**
     * Get all products
     */
    public function all();

    /**
     * Create new product
     * @param object $request
     */
    public function create($request);

}

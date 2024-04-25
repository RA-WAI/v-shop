<?php
namespace App\Services;

use App\Contracts\CategoryRepositoryInterface;

class CategoryService
{
    public function __construct(
        protected CategoryRepositoryInterface $categoryRepository
    ) {
    }

    /**
     * Return all categories
     */
    public function all()
    {
        return $this->categoryRepository->all();
    }
}

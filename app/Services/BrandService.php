<?php
namespace App\Services;

use App\Contracts\BrandRepositoryInterface;

class BrandService
{
    public function __construct(
        protected BrandRepositoryInterface $brandRepository
    ) {
    }

    /**
     * Return all brands
     */
    public function all()
    {
        return $this->brandRepository->all();
    }
}

<?php
namespace App\Repositories;

use App\Contracts\BrandRepositoryInterface;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Collection;

class BrandRepository implements BrandRepositoryInterface
{
    /**
     * Get all brands
     * @return Collection Brand
     */
    public function all(): Collection {
        return Brand::get();
    }
}

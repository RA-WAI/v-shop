<?php
namespace App\Repositories;

use App\Contracts\ProductRepositoryInterface;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository implements ProductRepositoryInterface
{
    /**
     * Get all products
     * @return Collection
     */
    public function all() : Collection {
        return Product::get();
    }

    /**
     * Create new product
     * @param array $request
     */
    public function create($request)
    {
        $product = Product::create($request);
        if(count($request['product_images'])) {
            foreach ($request['product_images'] as $key => $image) {
                $product->images()->create(['image' => $image]);
            }
        }
        return $product;
    }

}

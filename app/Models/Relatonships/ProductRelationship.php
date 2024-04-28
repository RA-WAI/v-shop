<?php
namespace App\Models\Relatonships;

use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait ProductRelationship
{
    /**
     * Get all of the images for the ProductRelationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
}

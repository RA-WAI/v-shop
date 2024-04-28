<?php

namespace App\Models;

use App\Models\Relatonships\ProductRelationship;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, HasSlug, ProductRelationship;

    protected $fillable = [
        'name',
        'slug',
        'quantity',
        'description',
        'published',
        'in_stock',
        'price',
        'brand_id',
        'category_id',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}

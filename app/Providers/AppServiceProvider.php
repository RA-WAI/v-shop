<?php

namespace App\Providers;

use App\Contracts\BrandRepositoryInterface;
use App\Contracts\CategoryRepositoryInterface;
use App\Contracts\ImageRepositoryInterface;
use App\Services\ProductService;
use App\Repositories\ProductRepository;
use Illuminate\Support\ServiceProvider;
use App\Contracts\ProductRepositoryInterface;
use App\Repositories\BrandRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\ImageRepository;
use App\Services\BrandService;
use App\Services\CategoryService;
use App\Services\ImageService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(ProductService::class, function ($app) {
            return new ProductService($app->make(ProductRepositoryInterface::class));
        });
        $this->app->bind(BrandRepositoryInterface::class, BrandRepository::class);
        $this->app->bind(BrandService::class, function ($app) {
            return new BrandService($app->make(BrandRepositoryInterface::class));
        });
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(CategoryService::class, function ($app) {
            return new CategoryService($app->make(CategoryRepositoryInterface::class));
        });
        $this->app->bind(ImageRepositoryInterface::class, ImageRepository::class);
        $this->app->bind(ImageService::class, function ($app) {
            return new ImageService($app->make(ImageRepositoryInterface::class));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

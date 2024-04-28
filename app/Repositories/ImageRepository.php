<?php
namespace App\Repositories;

use App\Contracts\ImageRepositoryInterface;
use Illuminate\Support\Facades\Storage;

class ImageRepository implements ImageRepositoryInterface
{
    /**
     * Upload image
     * @param file $image
     * @return string $imageName
     */
    public function uploadImage($image)
    {
        return Storage::put("/public/{$image['path']}", $image['file']);
    }

    /**
    * Image remove
    * @param array $image
    */
    public function removeImage($image)
    {
        if (Storage::exists($image['image_path'])) {
            Storage::delete($image['image_path']);
        }
    }
}

<?php
namespace App\Services;

use App\Contracts\ImageRepositoryInterface;

class ImageService
{
    public function __construct(
        protected ImageRepositoryInterface $imageRepository
    ) {
    }

    /**
     * Upload images
     * @param array $image
     * @return string $imageName
     */
    public function uploadImage($image)
    {
        return $this->imageRepository->uploadImage($image);
    }

    /**
     * Image remove
     * @param array $image
     */
    public function removeImage($image)
    {
        return $this->imageRepository->removeImage($image);
    }
}

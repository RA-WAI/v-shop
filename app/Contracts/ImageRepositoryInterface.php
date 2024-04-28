<?php
namespace App\Contracts;

interface ImageRepositoryInterface
{
    /**
     * Upload image
     * @param file $image
     */
    public function uploadImage($image);

    /**
    * Image remove
    * @param array $image
    */
    public function removeImage($image);
}

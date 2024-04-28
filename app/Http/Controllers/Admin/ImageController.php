<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRemoveRequest;
use App\Http\Requests\ImageUploadRequest;
use App\Services\ImageService;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function __construct(
        protected ImageService $imageService
    )
    {

    }
    /**
     * Image upload
     * @param object $request
     * @return string $image_path
     */
    public function uploadImage(ImageUploadRequest $request)
    {
        return $this->imageService->uploadImage($request->all());
    }

    /**
     * Image remove
     * @param object $request
     */
    public function removeImage(ImageRemoveRequest $request)
    {
        return $this->imageService->removeImage($request->all());
    }

}

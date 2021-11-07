<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Exception;

class ImageController extends Controller
{

    public static function uploadImageUpdate($file, $data, $imageName = "TEST_", $pathName = "test"): string
    {
        if (!empty($file)) {
            $adressImage = "./images/" . $pathName . "/" . $data->image;
            if (file_exists($adressImage)) {
                unlink($adressImage);
            }
            try {
                $intRandom = random_int(100_000, 999_999);
            } catch (Exception $e) {
                $intRandom = 111111;
            }
            $image = $imageName . time() . "_IMG_" . $intRandom . "_" . $file->getClientOriginalName();
            $file->move("./images/" . $pathName, $image);
        } else {
            $image = $data->image;
        }
        return $image;
    }


    public static function deleteImage($image, $path): bool
    {
        if (file_exists('images/' . $path . '/' . $image)) {
            unlink('images/' . $path . '/' . $image);
            return true;
        }
        return false;
    }

}

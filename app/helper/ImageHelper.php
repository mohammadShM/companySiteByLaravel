<?php

namespace App\helper;

class ImageHelper
{

    /** @noinspection PhpUnhandledExceptionInspection */
    public static function updateImage($request, $data, $firstImageName = "TEST_", $urlImageName = "test")
    {
        $file = $request->file('image');
        if (!empty($file)) {
            $adressImage = "./images/" . $urlImageName . "/" . $data->image;
            if (file_exists($adressImage)) {
                unlink($adressImage);
            }
            $image = $firstImageName . time() . "_IMG_" . random_int(100_000, 999_999) . "_" . $file->getClientOriginalName();
            $file->move("./images/" . $urlImageName, $image);
        } else {
            $image = $data->image;
        }
        return $image;
    }

}

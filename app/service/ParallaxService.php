<?php

namespace App\service;

use App\Models\Parallax;

class ParallaxService
{

    public static function getParallaxById($id)
    {
        return Parallax::findOrFail($id);
    }

    public static function getPaginate($number)
    {
        return Parallax::paginate($number);
    }

    public static function updateParallax($id, $request, $image)
    {
        self::getParallaxById($id)->update([
            "title" => $request->title,
            "titleSize" => $request->titleSize,
            "titleColor" => $request->titleColor,
            "body" => $request->body,
            "bodySize" => $request->bodySize,
            "bodyColor" => $request->bodyColor,
            "image" => $image,
        ]);
    }

}

<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers\Administrator;

use App\helper\GloabalVariabel;
use App\helper\ImageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateParallaxRequest;
use App\Http\Requests\UpdateParallaxRequest;
use App\Models\Parallax;
use App\service\ParallaxService;

class ParallaxController extends Controller
{

    public function index()
    {
        $parallaxes = ParallaxService::getPaginate(5);
        return view('admin.parallax.index', compact('parallaxes'));
    }

    public function create()
    {
        return view('admin.parallax.create');
    }

    public function store(CreateParallaxRequest $request)
    {
        $file = $request->file('image');
        $image = "";
        if (!empty($file)) {
            $image = "PARALLAX_" . time() . "_IMG_" . rand(100_000, 999_999) . "_" . $file->getClientOriginalName();
            $file->move("./images/parallax", $image);
        }
        Parallax::create([
            "title" => $request->title,
            "titleSize" => $request->titleSize,
            "titleColor" => $request->titleColor,
            "body" => $request->body,
            "bodySize" => $request->bodySize,
            "bodyColor" => $request->bodyColor,
            "image" => $image,
        ]);
        session()->flash('create', "عملیات ایجاد دیتا در درون جدول سئو با موفقیت انجام شد .");
        return redirect()->route('parallax.index');
    }

    public function show(Parallax $parallax)
    {

    }

    public function edit($id)
    {
        $parallax = ParallaxService::getParallaxById($id);
        return view('admin.parallax.edit', compact('parallax'));
    }

    public function update(UpdateParallaxRequest $request, $id)
    {
        $deleteImage = ParallaxService::getParallaxById($id);
        $parallaxImageName = GloabalVariabel::PARALLAX_IMAGE_NAME;
        $image = ImageHelper::updateImage($request, $deleteImage, $parallaxImageName, "parallax");
        ParallaxService::updateParallax($id, $request, $image);
        session()->flash('update', "عملیات ویرایش دیتا در درون جدول سئو با موفقیت انجام شد .");
        return redirect()->route('parallax.index');
    }

    public function destroy($id)
    {
        $deleteImage = ParallaxService::getParallaxById($id);
        if (!empty($deleteImage->image)) {
            $imageAdress = 'images/parallax/' . $deleteImage->image;
            if (file_exists($imageAdress)) {
                unlink($imageAdress);
            }
        }
        Parallax::destroy($id);
        session()->flash('delete', 'عملیات پاک کردن دیتا با موفقیت انجام شد');
        return redirect()->route('parallax.index');
    }
}

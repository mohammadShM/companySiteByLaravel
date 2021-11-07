<?php /** @noinspection ReturnTypeCanBeDeclaredInspection */

/** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers\Administrator;

use App\helper\ImageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\News;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::paginate(5);
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    /** @noinspection PhpUnhandledExceptionInspection */
    public function store(CreateNewsRequest $request)
    {
        $file = $request->file('image');
        $image = "";
        if (!empty($file)) {
            $image = "NEWS_" . time() . "_IMG_" . random_int(100_000, 999_999) . "_" . $file->getClientOriginalName();
            $file->move("./images/news", $image);
        }
        News::create([
            "title" => $request->title,
            "summery" => $request->summery,
            "image" => $image,
        ]);
        session()->flash('create', "عملیات ایجاد دیتا در درون جدول news با موفقیت انجام شد .");
        return redirect()->route('news.index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news'));
    }

    public function update(UpdateNewsRequest $request, $id)
    {
//        $file = $request->file('image');
//        $deleteImage = News::findOrFail($id)->image;
//        // $image = "";
//        if (!empty($file)) {
//            $adressImage = "./images/news/" . $deleteImage;
//            if (file_exists($adressImage)) {
//                unlink($adressImage);
//            }
//            $image = "NEWS_" . time() . "_IMG_" . rand(100_000, 999_999) . "_" . $file->getClientOriginalName();
//            $file->move("./images/news", $image);
//        } else {
//            $image = $deleteImage;
//        }
        $deleteImage = News::findOrFail($id);
        $image = ImageHelper::updateImage($request, $deleteImage, "NEWS_", "news");
        News::findOrFail($id)->update([
            "title" => $request->title,
            "summery" => $request->summery,
            "image" => $image,
        ]);
        session()->flash('update', "عملیات ویرایش دیتا در درون جدول سئو با موفقیت انجام شد .");
        return redirect()->route('news.index');
    }

    public function destroy($id)
    {
        /** @var News $deleteImage */
        $deleteImage = News::query()->findOrFail($id);
        if (!empty($deleteImage->image)) {
            $imageAdress = 'images/news/' . $deleteImage->image;
            if (file_exists($imageAdress)) {
                unlink($imageAdress);
            }
        }
        News::destroy($id);
        session()->flash('delete', 'عملیات پاک کردن دیتا با موفقیت انجام شد');
        return redirect()->route('news.index');
    }
}

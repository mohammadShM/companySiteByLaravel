<?php /** @noinspection ReturnTypeCanBeDeclaredInspection */

/** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {
        $sliders = Slider::paginate(5);
        return view('admin.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        $file = $request->file('image');
        $image = "";
        if (!empty($file)) {
            /** @noinspection PhpUnhandledExceptionInspection */
            $image = "SLIDER_" . time() . "_IMG_" . random_int(100_000, 999_999) . "_" . $file->getClientOriginalName();
            $file->move("./images/slider", $image);
        }
        /** @noinspection PhpUndefinedFieldInspection */
        /** @noinspection PhpPossiblePolymorphicInvocationInspection */
        Slider::create([
            'image' => $image,
            'caption' => $request->caption,
            'link' => $request->link,
        ]);
        session()->flash('create', 'done create');
        return redirect()->route('slider.index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $file = $request->file('image');
        $slider = Slider::findOrFail($id);
        $image = ImageController::uploadImageUpdate($file, $slider, 'SLIDER_', 'slider');
        /** @noinspection PhpUndefinedFieldInspection */
        /** @noinspection PhpPossiblePolymorphicInvocationInspection */
        $slider->update([
            "caption" => $request->caption,
            "link" => $request->link,
            "image" => $image,
        ]);
        session()->flash('update', "عملیات ویرایش دیتا در درون جدول سئو با موفقیت انجام شد .");
        return redirect()->route('slider.index');
    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id)->image;
        ImageController::deleteImage($slider,'slider');
        Slider::destroy($id);
        session()->flash('delete', 'done delete');
        return redirect()->route('slider.index');
    }
}

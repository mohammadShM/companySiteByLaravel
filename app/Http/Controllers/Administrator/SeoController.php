<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSeoRequest;
use App\Models\Seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{

    public function index()
    {
        $seos = Seo::query()->paginate(5);
        return view('admin.seo.index', compact('seos'));
    }

    public function create()
    {
        return view('admin.seo.create');
    }

    public function store(CreateSeoRequest $request)
    {
        Seo::create([
            "title" => $request->title,
            "keywords" => $request->keywords,
            "description" => $request->description,
            "author" => $request->author,
        ]);
        session()->flash('create', "عملیات ایجاد دیتا در درون جدول سئو با موفقیت انجام شد .");
        return redirect()->route('seo.index');
    }

    public function show(Seo $seo)
    {

    }

    public function edit(Seo $seo)
    {

    }

    public function update(Request $request, Seo $seo)
    {

    }

    public function destroy($id)
    {
        Seo::destroy($id);
        session()->flash('delete', 'عملیات پاک کردن دیتا با موفقیت انجام شد');
        return redirect()->route('seo.index');
    }

}

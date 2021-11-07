<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateLinkRequest;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{

    public function index()
    {
        $links = Link::query()->paginate(5);
        return view('admin.link.index', compact('links'));
    }

    public function create()
    {
        return view('admin.link.create');
    }

    public function store(CreateLinkRequest $request)
    {
        Link::create([
            "link" => $request->link,
            "url" => $request->url,
        ]);
        session()->flash('create', "عملیات ایجاد دیتا در درون جدول سئو با موفقیت انجام شد .");
        return redirect()->route('link.index');
    }

    public function show(Link $link)
    {

    }

    public function edit(Link $link)
    {

    }

    public function update(Request $request, Link $link)
    {

    }

    public function destroy($id)
    {
        Link::destroy($id);
        session()->flash('delete', 'عملیات پاک کردن دیتا با موفقیت انجام شد');
        return redirect()->route('link.index');
    }
}

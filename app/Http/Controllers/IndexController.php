<?php /** @noinspection ReturnTypeCanBeDeclaredInspection */

/** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Link;
use App\Models\News;
use App\Models\Parallax;
use App\Models\Seo;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {
        // for data in the form of get collective ===============================
        // $seo = Seo::orderBy('id', 'desc')->take(1)->skip(0)->get();
        // for data in the form of get object ===============================
        $seo = Seo::orderBy('id', 'desc')->first();
        $parallax = Parallax::orderBy('id', 'desc')->first();
        $links = Link::orderBy('id', 'desc')->take(4)->skip(0)->get();
        $news = News::orderBy('id', 'desc')->take(6)->skip(0)->get();
        $sliders = Slider::all();
        return view('front.index', compact('seo', 'parallax', 'links', 'news', 'sliders'));
    }

    public function showAllNews()
    {
        $parallax = Parallax::orderBy('id', 'desc')->first();
        $links = Link::orderBy('id', 'desc')->take(4)->skip(0)->get();
        $news = News::paginate(6);
        return view('front.showAllNews', compact('parallax', 'links', 'news'));
    }

    public function showNews($id)
    {
        $parallax = Parallax::orderBy('id', 'desc')->first();
        $links = Link::orderBy('id', 'desc')->take(4)->skip(0)->get();
        $news = News::findOrFail($id);
        $comments = News::findOrFail($id)->comments()->where('publish', '=', 1)->get();
        $seo = News::where('id', '=', $id)->get(['title', 'keywords', 'description', 'author']);
        return view('front.showNews', compact('parallax', 'links', 'news', 'comments', 'seo'));
    }

    /** @noinspection PhpUndefinedFieldInspection
     * @noinspection ReturnTypeCanBeDeclaredInspection
     */
    public function comment(Request $request)
    {
        $id = $request->id;
        Comment::create([
            "fullName" => $request->fullName,
            "email" => $request->email,
            "comment" => $request->comment,
            "news_id" => $id,
        ]);
        session()->flash('comment', 'success send comment.');
        return redirect()->route('showNews', ['id' => $id]);
    }

    /** @noinspection PhpUndefinedFieldInspection */
    public function search(Request $request)
    {
        $query = News::where('title',  'like' ,'%' . $request->search. '%')
            ->orWhere('summery', 'like' ,'%' . $request->search. '%')->get();
        return $query;
    }

}

<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    /** @noinspection PhpUndefinedFieldInspection */
    public function store(Request $request)
    {
        $request->validate([
            "fullName" => "required|string|min:5|max:100",
            "email" => "required|string|min:5|max:100",
            "comment" => "required|string|min:5|max:3000",
        ]);
        Contact::create([
            "fullName" => $request->fullName,
            "email" => $request->email,
            "comment" => $request->comment,
        ]);
        session()->flash('create', 'done');
        return redirect('/');
    }

    public function index()
    {
        $contact = Contact::paginate(10);
        return view('admin.contact.index', compact('contact'));
    }

    public function delete($id)
    {
        Contact::destroy(intval($id));
        session()->flash('delete', 'عملیات پاک کردن با موفقیت انجام شد');
        return redirect()->route('contact.index');
    }

}

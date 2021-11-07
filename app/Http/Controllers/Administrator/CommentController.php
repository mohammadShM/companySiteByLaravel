<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::withTrashed()->with('news')->paginate(5);
        return view('admin.comment.index', compact('comments'));
    }

    /** @noinspection PhpUndefinedFieldInspection */
    public function update(Request $request, $id)
    {
        // Address for back in current page in redirect
        $url = url()->previous();
        $comment = Comment::find($id);
        if (!empty($comment)) {
            $comment->update([
                'publish' => $request->publish,
            ]);
            session()->flash('update', 'عملیات ویرایش دیتا با موفقیت انجام شد');
        } else {
            session()->flash('unUpdate', 'عملیات ویرایش دیتا با موفقیت انجام نشد زیرا دیتا در حالت دیلیت می باشد');
        }
        return redirect($url);
    }

    public function delete($id)
    {
        // Address for back in current page in redirect
        $url = url()->previous();
        Comment::destroy($id);
        session()->flash('delete', 'عملیات حذف دیتا با موفقیت انجام شد');
        return redirect($url);
    }

    public function deleteAndUndelete($id)
    {
        // Address for back in current page in redirect
        $url = url()->previous();
        $comment = Comment::withTrashed()->find($id);
        if ($comment->deleted_at !== null) {
            $comment->update([
                'deleted_at' => null,
                'publish' => 0,
            ]);
        } else {
            $comment->destroy($id);
        }
        session()->flash('deleteAndUndelete', 'عملیات تغییر وضعیت دیتا با موفقیت انجام شد');
        return redirect($url);
    }

}

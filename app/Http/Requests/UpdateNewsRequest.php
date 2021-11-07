<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed $summery
 * @property mixed $title
 */
class UpdateNewsRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "title" => "required|min:10|max:100",
            "image" => "nullable|mimes:jpg,png|image",
            "summery" => "required|min:10",
        ];
    }
}

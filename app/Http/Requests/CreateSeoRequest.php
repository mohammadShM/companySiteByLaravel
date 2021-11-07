<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed $title
 * @property mixed $keywords
 * @property mixed $description
 * @property mixed $author
 */
class CreateSeoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "title" => "required|min:10|max:100|string",
            "keywords" => "required|min:10|max:500|string",
            "description" => "required|min:10|max:500|string",
            "author" => "required|min:5|max:100|string",
        ];
    }
}

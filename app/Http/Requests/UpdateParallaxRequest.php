<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed $title
 * @property mixed $titleSize
 * @property mixed $titleColor
 * @property mixed $body
 * @property mixed $bodySize
 * @property mixed $bodyColor
 * @property mixed $image
 */
class UpdateParallaxRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => "required",
            'titleSize' => "required",
            'titleColor' => "required",
            'body' => "required|max:2500",
            'bodySize' => "required",
            'bodyColor' => "required",
            'image' => "nullable|mimes:jpg,png",
        ];
    }
}

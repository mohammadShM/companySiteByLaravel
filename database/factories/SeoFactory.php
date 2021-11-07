<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace Database\Factories;

use App\Models\Seo;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeoFactory extends Factory
{
    protected $model = Seo::class;

    public function definition()
    {
        return [
            "title" => $this->faker->words(2,true),
            "keywords" => $this->faker->words(10,true),
            "description" => $this->faker->text(250),
            "author" => $this->faker->userName(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Parallax;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParallaxFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Parallax::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'titleSize' => $this->faker->numberBetween(12, 20),
            'titleColor' => $this->faker->colorName(),
            'body' => $this->faker->text,
            'bodySize' => $this->faker->numberBetween(12, 20),
            'bodyColor' => $this->faker->colorName(),
            'image' => $this->faker->imageUrl(),
        ];
    }
}

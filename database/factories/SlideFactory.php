<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Slide;

class SlideFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Slide::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'image' => $this->faker->text(),
            'alt' => '{}',
            'heading' => '{}',
            'text' => '{}',
            'link' => $this->faker->text(),
            'sort' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}

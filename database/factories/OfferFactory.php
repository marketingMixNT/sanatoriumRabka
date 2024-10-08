<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Offer;

class OfferFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Offer::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'meta_title' => '{}',
            'meta_desc' => '{}',
            'title' => '{}',
            'slug' => '{}',
            'thumbnail' => $this->faker->text(),
            'banner_img' => $this->faker->text(),
            'short_desc' => '{}',
            'description' => '{}',
            'published_at' => $this->faker->dateTime(),
            'published_end' => $this->faker->dateTime(),
            'sort' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}

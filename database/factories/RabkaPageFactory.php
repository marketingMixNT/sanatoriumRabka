<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\RabkaPage;

class RabkaPageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RabkaPage::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'meta_title' => '{}',
            'meta_desc' => '{}',
            'banner_img' => $this->faker->text(),
            'page_title' => '{}',
            'slug' => '{}',
            'heading' => '{}',
            'content' => '{}',
            'sort' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}

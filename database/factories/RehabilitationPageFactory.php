<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\RehabilitationPage;

class RehabilitationPageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RehabilitationPage::class;

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
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,   // Generates a fake sentence for the article name
            'text' => $this->faker->paragraph,  // Generates a fake paragraph for the article text
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $images = [
            'https://contenthub-static.grammarly.com/blog/wp-content/uploads/2022/08/BMD-3398.png',
            'https://fatstacksblog.com/wp-content/uploads/2019/11/Person-writing-article-nov26.jpg',
            'https://c8.alamy.com/compfr/2gca8w8/presentation-du-concept-d-entreprise-modele-de-conception-de-cloud-word-ecrit-dans-un-article-2gca8w8.jpg',
            ''
        ];
        $title = $this->faker->sentence(random_int(2,7));
        $slug =Str::slug($title);

        return [
            'title'         => $title,
            'slug'          => $slug,
            'category_id'   =>$this->faker->numberBetween(1,8),
            'views'         => $this->faker->numberBetween(0,1500),
            'content'       => $this->faker->paragraphs(rand(2,25),true),
            'is_published'  => random_int(0,1)."",
            'image'         => $this->faker->randomElement($images),
            'created_at'    => now(),
            'updated_at'    => now(),
        ];
    }
}

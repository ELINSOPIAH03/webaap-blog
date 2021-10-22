<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'title_blog' => $this->faker->sentence(mt_rand(2,4)),
                'slug' => $this->faker->slug(),
                'excerpt' => $this->faker->paragraph(3, false),
                'body' => '<p>'.implode('</p><br><p>',$this->faker->paragraphs(mt_rand(10,15))).'</p><br>',
                'user_id' => mt_rand(1,3),
                'category_id' => mt_rand(1,3)
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
                
        return [
            //'autor_id' => AutorFactory::get()->random()->id,
            'autor_id' => 1,
            'text' => $this->faker->text
        ];
    }
}

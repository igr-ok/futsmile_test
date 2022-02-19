<?php

namespace Database\Factories;

use Carbon\Carbon;
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
            //'autor_id' => Factory::get()->random()->id,
            'autor_id' => 1,
            'text' => $this->faker->text,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}

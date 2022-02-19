<?php

namespace Database\Factories;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Autor>
 */
class AutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //'user_id' => Factory::get()->random()->id,
            'user_id' => 1,
            'about' => $this->faker->text,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}

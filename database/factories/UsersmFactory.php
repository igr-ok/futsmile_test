<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Usersm>
 */
class UsersmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->sentence(1),
            'last_name' => $this->faker->sentence(1),
            'second_name' => $this->faker->sentence(1),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            
        ];
    }
}

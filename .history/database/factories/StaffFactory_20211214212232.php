<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $age = $this->faker->rand(20,60);
        $wexp = $age - 20;
        return [
            'email' => $this->faker->safeEmail(),
            'fio' => $this->faker->name(),
            'age' => $age,
            'work_exp' => $wexp,
            'avg_salary' => 1200 * $this->faker->rand(20,60),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'username' => $this->faker->firstName(),
			'age' => $this->faker->randomNumber(),
			'company_id' => createOrRandomFactory(\App\Models\Company::class),
			'status' => $this->faker->randomElement(['w', 'old']),
        ];
    }
}

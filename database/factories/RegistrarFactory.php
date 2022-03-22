<?php

namespace Database\Factories;

use App\Models\Registrar;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistrarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'full_name' => $this->faker->name(),
            'gender' => $this->faker->randomElement(config('constant.registrar.gender')),
            'address' => $this->faker->address(),
            'religion' => $this->faker->randomElement(config('constant.registrar.religion')),
            'asal_smp' => $this->faker->company(),
            'major' => $this->faker->randomElement(config('constant.registrar.major')),
        ];
    }
}

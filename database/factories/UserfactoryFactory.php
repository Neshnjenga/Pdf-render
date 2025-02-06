<?php

namespace Database\Factories;

use Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

// @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
class UserfactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = User::class;
    public function definition(): array
    {
        return [
            'name'=> $this->faker->name,
            'email'=>$this->faker->unique()->safeEmail,
            'password'=>Hash::make('password'),
        ];
    }
}

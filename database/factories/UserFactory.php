<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_user' => $this->faker->uuid,
            'level_user' => $this->faker->randomElement(['Admin', 'Kasir', 'Kitchen', 'Bartender', 'Pelayan']),
            'username' => $this->faker->unique()->userName,
                
            'updated_at' => null,
        ];
    }
}

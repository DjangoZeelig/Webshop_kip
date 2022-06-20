<?php

namespace Database\Factories;

use app\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use illuminate\support\facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Faker\Factory as Faker;
use Faker\Provider\en_US\Address;
use Faker\Provider\en_US\PhoneNumber;
use faker\Provider\Internet;
use faker\Provider\DateTime;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'email' => $this->faker->email(),
            'password' => Hash::make($this->faker->password()),

        ];
    }
}
    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
//     public function unverified()
//     {
//         return $this->state(function (array $attributes) {
//             return [
//                 'email_verified_at' => null,
//             ];
//         });
//     }
// }

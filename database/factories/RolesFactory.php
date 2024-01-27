<?php

// RoleFactory.php

namespace Database\Factories;

use App\Models\Roles;
use Illuminate\Database\Eloquent\Factories\Factory;

class RolesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Define roles in a specific order
        static $roles = ['Admin', 'Employee', 'Employer'];

        return [
            'role' => array_shift($roles), // Take the next role from the array
        ];
    }
}




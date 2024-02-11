<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'project' => fake()->sentence(2),
            'aipRefCode' => fake()->numberBetween(100,999).'-'.fake()->numberBetween(1000,9999).'-'.fake()->numberBetween(1000,9999),
            'activityDesc' => fake()->sentence(5),
            'impOffice' => fake()->sentence(2),
            'startDate' => Carbon::parse('2016-01-01'),
            'endDate' => Carbon::parse(fake()->dateTimeBetween($startDate='2016-06-25', $endDate='2016-12-25')),
            'expectedOutput' => fake()->sentence(4),
            'fundingServices' => fake()->randomFloat(2, 9, 90),
            'personalServices' => fake()->randomFloat(2, 9, 90),
            'maint' => fake()->randomFloat(2, 9, 90),
            'capitalOutlay' => fake()->randomFloat(2, 9, 90),
            'total' => fake()->randomFloat(2, 9, 90),
            'year' => Carbon::parse('2016-01-01')
        ];
    }
}

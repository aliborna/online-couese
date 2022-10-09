<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition(): array
    {
    	return [
    	    'title' => $this->faker->title(),
            'price' => $this->faker->numberBetween(300000,10000000),
            'rate'  => $this->faker->numberBetween(1,10)
    	];
    }
}

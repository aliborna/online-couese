<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
    	return [
    	    'total_price' => $this->faker->numberBetween(300000,10000000),
    	    'discount'    => $this->faker->numberBetween(0,100),
    	];
    }
}

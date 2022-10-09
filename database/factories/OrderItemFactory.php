<?php

namespace Database\Factories;

use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;
use App\Models\Order;

class OrderItemFactory extends Factory
{
    protected $model = OrderItem::class;

    public function definition(): array
    {
    	return [
    	    'course_id' => Course::factory(),
            'order_id'  => Order::factory(),
            'price'     => function(array $attributes) {
                return Course::find($attributes['course_id'])->price;
            }
    	];
    }
}

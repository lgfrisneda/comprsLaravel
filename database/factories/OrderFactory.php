<?php

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'address_id' => rand(1,5),
        'product_id' => rand(1,5)
    ];
});

<?php

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 2),
        'description' => $faker->address
    ];
});

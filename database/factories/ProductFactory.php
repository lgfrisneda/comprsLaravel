<?php

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $faker_ecom = \Faker\Factory::create();
    $faker_ecom->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker_ecom));
    
    return [
        'name' => $faker_ecom->productName
    ];
});

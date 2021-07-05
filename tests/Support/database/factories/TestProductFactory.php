<?php

use Faker\Generator as Faker;

$factory->define(\Freshbitsweb\LaravelCartManager\Test\Support\TestProduct::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'price' => $faker->randomFloat($nbMaxDecimals = 2),
        /*'custom_attributes' => json_encode([
            'tamaño' => '15X15'
        ]),*/
    ];
});

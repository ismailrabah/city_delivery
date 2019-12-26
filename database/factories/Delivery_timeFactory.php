<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Delivery_time::class, function (Faker $faker) {
    return [
        'span' => $faker->text(50),
    ];
});

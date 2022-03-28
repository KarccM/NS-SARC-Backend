<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'created_at' => now(),
        'updated_at' => now(),
        'type'=> $this->faker->title()
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\User;
use App\Threats;
use Faker\Generator as Faker;

$factory->define(Threats::class, function (Faker $faker) {
    return [
        'user_id'=> User::factory(),
        'manger_id'=> User::factory(),
        'reason'=> $this->faker->paragraph(),
        'created_at'=>now(),
        'updated_at'=>now(),

    ];
});

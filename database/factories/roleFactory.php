<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    $fakeType=["volunteer","officer"]; 
    $rand = array_rand($fakeType,1);
    return [
        'name' => $this->faker->name(),
        'type' => $fakeType[$rand],
        'description' => $this->faker->text(),
        'active'=> 1
    ];
});

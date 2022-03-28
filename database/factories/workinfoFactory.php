<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Workinfo;
use App\User;
use App\Point;

$factory->define(Workinfo::class, function (Faker $faker) {
    return [
        'user-id'=> has(User::class)->count(1),
        'branch-id'=> has(Point::class)->count(1),

    ];
});

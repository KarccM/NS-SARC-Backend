<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\User;
use App\Section;
use App\Experience;
use Faker\Generator as Faker;

$factory->define(Experience::class, function (Faker $faker) {
    return [
        'user_id'=>User::factory(),
        'section_id'=>Section::factory(),
        'field'=> $this->faker->text(),
        'title'=> $this->faker->title(),
        'start_at'=>now(),
        'end_at'=>now(),
        'created_at'=>now(),
        'updated_at'=>now(),
    ];
});

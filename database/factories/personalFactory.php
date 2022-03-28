<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PersonalInfo;
use Faker\Generator as Faker;

$factory->define(PersonalInfo::class, function (Faker $faker) {
    return [
        'nat_id' => (int)$this->faker->numerify('###########'),
        'mobile' => (int)$this->faker->numerify('##########'),
        'phone' => (int)$this->faker->numerify('##########'),
        'fst_nm' => $this->faker->word(),
        'lst_nm' => $this->faker->word(),
        'mdl_nm' => $this->faker->word(),
        'marital_status' => $this->faker->word(),
        'mthr_nm' => $this->faker->word(),
        'gender' => $this->faker->word(),
        'certigicate_type' => $this->faker->word(),
        'certigicate_Details' => $this->faker->word(),
        'engName' => $this->faker->word(),
        'shoes_size' => $this->faker->word(),
        'waist_size' => $this->faker->word(),
        'shoulders_size' => $this->faker->word(),
        'birth_place' => $this->faker->word(),
        'birth_date' => $this->faker->dateTime(),

    ];
});

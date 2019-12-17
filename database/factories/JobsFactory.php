<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Jobs;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Jobs::class, function (Faker $faker) {
    return [
        'name'      => $faker->jobTitle,
    ];
});

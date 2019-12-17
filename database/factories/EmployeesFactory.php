<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Employees;
use Faker\Generator as Faker;

$factory->define(Employees::class, function (Faker $faker) {
    return [
        'name'  => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'id_jobs' => $faker->numberBetween(1, App\Jobs::count())
    ];
});

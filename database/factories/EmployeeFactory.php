<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'firstname'=> $faker -> firstName,
        'lastname'=> $faker ->  lastName,
        'date_of_birth'=> $faker -> date,
        'salary'=> $faker -> randomFloat(2,1000,4000)
    ];
});

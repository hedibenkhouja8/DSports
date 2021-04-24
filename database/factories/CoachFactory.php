<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Coach;
use Faker\Generator as Faker;

$factory->define(Coach::class, function (Faker $faker) {
    return [
        'nomcoach'=> $faker->firstNameMale,
        'prenomcoach'=> $faker->lastName,
        'emailcoach'=> $faker->email,
        'passcoach'=> $faker->password,
        'agecoach'=> $faker->randomDigit,
        'specialite'=> $faker->randomElement($array = array ('box','danse','yoga')),
        'created_at'=>now()
    ];
});

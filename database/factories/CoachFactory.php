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
        'picture'=> $faker->imageUrl,
       
        'address' => $faker->address,
        'phone' => $faker->e164PhoneNumber,
        'Description'=> $faker->sentence($nbWords = 10, $variableNbWords = true),
        'specialite'=> $faker->randomElement($array = array ('Boxing','Dancing','Yoga','Swimming','Cycling','Weight Training')),
        'created_at'=>now()
    ];
});

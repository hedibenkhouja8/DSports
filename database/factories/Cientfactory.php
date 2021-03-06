<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use App\Coach;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'nom'=> $faker->firstName,
        'prenom'=> $faker->lastName,
        'emailclient'=> $faker->email,
       
        'age'=> $faker->randomDigit,
        'picture' => $faker->imageUrl,
        'address' => $faker->address,
        'phone' => $faker->e164PhoneNumber,
        'sport'=> $faker->randomElement($array = array ('Boxing','Dancing','Yoga','Swimming','Cycling','Weight Training')),
        'datedebutabonnement'=> $faker->date($format = 'Y-m-d', $max = 'now'),
        'datefinabonnement'=> $faker->date($format = 'Y-m-d', $max = 'now'),
        'coach_id' => Coach::get('id')->random()
    ];
});

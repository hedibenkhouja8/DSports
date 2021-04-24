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
        'passeclient'=> $faker->password,
        'age'=> $faker->randomDigit,
        'sport'=> $faker->randomElement($array = array ('yoga','danse','box')),
        'datedebutabonnement'=> $faker->date($format = 'Y-m-d', $max = 'now'),
        'datefinabonnement'=> $faker->date($format = 'Y-m-d', $max = 'now'),
        'coach_id' => Coach::get('id')->random()
    ];
});

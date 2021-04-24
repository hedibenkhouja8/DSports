<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use App\Coach;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'nom'=> $faker->word,
        'prenom'=> $faker->word,
        'emailclient'=> $faker->word,
        'passeclient'=> $faker->word,
        'age'=> $faker->randomDigit,
        'sport'=> $faker->randomElement($array = array ('yoga','danse','box')),
        'datedebutabonnement'=> $faker->word,
        'datefinabonnement'=> $faker->word,
        'coach_id' => Coach::get('id')->random()
    ];
});

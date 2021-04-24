<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'nomadmin'=> $faker->firstNameMale,
        'prenomadmin'=> $faker->lastName,
        'emailadmin'=> $faker->email,
        'passadmin'=> $faker->password,
        'created_at'=>now()
    ];
});

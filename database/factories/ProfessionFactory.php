<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Profession;

$factory->define(Profession::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3, false),
    ];
});

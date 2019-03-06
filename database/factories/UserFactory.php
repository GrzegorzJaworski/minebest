<?php

use App\Node;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Node::class, function (Faker $faker) {
    static $no = 2;

    return [
        'username' => $faker->userName,
        'credits_left' => $faker->numberBetween(1,10000),
        'credits_right' => $faker->numberBetween( 1,10000),
        'left_child' => $no < 20 && rand(0, 1) < 0.25 ? $no++ : null,
        'right_child' => $no < 20 && rand(0, 1) < 0.25 ? $no++ : null,
    ];
});

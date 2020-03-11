<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(App\product::class, function (Faker $faker) {
    return [
        'productName' => $faker->word,
        'caregoryId' => 2,
        'price' => $faker->numberBetween($min = 20, $max = 10000),
        'qty' => $faker->numberBetween($min = 5, $max = 10),
        'shortDescription' => $faker->text,
        'longDescription' => $faker->text,
        'pic' =>'productImage/20bp-1.jpg',
        'publicationStatus' => 1,        

    ];
});

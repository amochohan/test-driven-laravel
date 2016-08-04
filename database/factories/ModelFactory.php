<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {

    $sizes = ['large', 'small', 'medium'];
    $colours = ['blue', 'red', 'green'];

    // The format of our product name will be size + colour + word
    // Large blue something

    return [
        'name' => ucfirst(sprintf('%s %s %s', $faker->randomElement($sizes), $faker->randomElement($colours), $faker->word)),
        'description' => $faker->sentence,
        'price' => $faker->numberBetween(500, 5000),
        'image' => $faker->imageUrl(300, 200, 'food'),
    ];

});
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

$factory->define(LegendsRising\Models\User::class, function (Faker\Generator $faker) {
    return [
        'username'   => $faker->name,
        'email'      => $faker->email,
        'password'   => bcrypt(str_random(10)),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
    ];
});

$factory->define(LegendsRising\Models\News::class, function (Faker\Generator $faker) {
    return [
        'title'      => $faker->title,
        'text'       => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
    ];
});

$factory->define(LegendsRising\Models\Faq::class, function (Faker\Generator $faker) {
    return [
        'question'      => $faker->title,
        'answer'       => $faker->realText(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
    ];
});
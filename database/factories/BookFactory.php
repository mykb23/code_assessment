<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'name' => $faker->text(30),
        'isbn' => $faker->numerify('###-##########'),
        'authors' => $faker->name(),
        'numberOfPages' => $faker->randomNumber(3),
        'publisher' => $faker->company(),
        'country' => $faker->country(),
        'released' => $faker->dateTime(),
    ];
});

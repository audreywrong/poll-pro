<?php
use Faker\Generator as Faker;
use Inani\Larapoll\Poll;

$factory->define(Poll::class, function (Faker $faker) {
    return [
        'question' => $faker->sentence,
    ];
});

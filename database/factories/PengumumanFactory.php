<?php

use Faker\Generator as Faker;

$factory->define(\App\Pengumuman::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'detail' => $faker->text
    ];
});

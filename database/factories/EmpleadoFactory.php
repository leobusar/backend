<?php

use Faker\Generator as Faker;

$factory->define(App\Empleado::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'documento' => $faker->unique()->randomNumber(8),
        'fecha_nac' => $faker->date(),
        'telefono' => $faker->numberBetween(300000000,360000000),
        'activo' => $faker->boolean(90)
    ];
});

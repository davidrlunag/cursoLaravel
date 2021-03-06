<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Curso;
use Faker\Generator as Faker;

$factory->define(Curso::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'description'=> $faker->text,
        'categoria_id' => factory(App\Categoria::class),
    ];
});

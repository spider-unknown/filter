<?php

use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {
    return [
        'task' => $faker->sentence(5),
        'roles' => $faker->randomElement($array = array ('admin','manager','worker'))
        ,
        'responsible' => $faker->name,
        'director' => $faker->name,
        'in_process' => $faker->boolean,
        'waiting_for_executing' => $faker->boolean,
        'completed' => $faker->boolean,
        'expire_date' => $faker->dateTimeThisYear,

    ];
});

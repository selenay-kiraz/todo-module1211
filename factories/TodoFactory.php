<?php

$factory->define(
    Pyro\TodosModule\Todo\TodoModel::class,
    function (Faker\Generator $faker) {

        $name = $faker->text();
        $slug = str_slug($name,'-');

        return [];
    }
);

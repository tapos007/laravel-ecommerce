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


$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->word,
    ];
});

$factory->defineAs(App\Category::class, 'subcategory', function ($faker) use ($factory) {
    $category = $factory->raw(App\Category::class);

    return array_merge($category,['parent_id'=>App\Category::where('parent_id',0)->get()->pluck('id')->random(1)]);
});


$factory->define(App\Tag::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->word,
    ];
});


$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->unique()->sentence(2,false),
        'description' => $faker->text(),
        'buying_price' => $faker->randomNumber(2),
        'sell_price' => $faker->randomNumber(3),
        'stock' => $faker->text(),
        'active' => $faker->randomElement([0,1]),
        'featured' => $faker->randomElement([0,1]),

    ];
});



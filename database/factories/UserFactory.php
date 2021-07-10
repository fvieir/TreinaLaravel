<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

/*$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});*/


$factory->define(App\Livro::class, function (Faker $faker) {
    return [
        'titulo' => $faker->text(100),
        'descricao' => $faker->text(100)
    ];
});

$factory->define(App\Cliente::class, function (Faker $faker){
    return [
        'nome' => $faker->text(50),
        'sobrenome' => $faker->text(100)
    ];
});

$factory->define(App\Telefone::class, function (Faker $faker){
    return [
        'cliente_id' => rand(1,110),
        'descricao' => $faker->text(50),
        'telefone' => $faker->phoneNumber('pt_BR'),
    ];
});


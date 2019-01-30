<?php

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

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'CP_ID' => $faker->unique()->randomNumber($nbDigits = 30),
        'CP_SEQ' => $faker->unique()->randomNumber($nbDigits = 3),
        'CP_NM' => $faker->company,
        'CP_REG_NO' => $faker->unique()->randomNumber($nbDigits = 15),
        'CP_CEO' => $faker->name,
        'CP_COR_NO' => $faker->unique()->randomNumber($nbDigits = 15),
        'CP_TEL' => $faker->phoneNumber,
        'CP_FAX' => $faker->phoneNumber,
        'CP_ADD' => $faker->address,
        'INPUT_ID' => $faker->unique()->randomNumber($nbDigits = 30),
        'INPUT_DATE' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),

    ];
});

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'CP_ID' => $faker->unique()->randomNumber($nbDigits = 30),
        'US_ID' => $faker->unique()->randomNumber($nbDigits = 30),
        'US_PWD' => str_random(10),
        'US_NM' => $faker->name,
        'US_AUTH' => str_random(3),
        'INPUT_ID' => $faker->unique()->randomNumber($nbDigits = 30),
        'INPUT_DATE' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),

    ];
});

$factory->define(App\Account::class, function (Faker $faker) {
    return [
        'CP_ID' => $faker->unique()->randomNumber($nbDigits = 30),
        'AC_ID' => $faker->unique()->randomNumber($nbDigits = 30),
        'AC_NM' => $faker->company,
        'AC_TEL' => $faker->phoneNumber,
        'AC_FAX' => $faker->phoneNumber,
        'AC_CEO' => $faker->name,
        'AC_EMAIL' => $faker->email,
        'AC_ADD' => $faker->address,
        'AC_EMP' => $faker->name,
        'INPUT_ID' => $faker->unique()->randomNumber($nbDigits = 30),
        'INPUT_DATE' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),

    ];
});

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'CP_ID' => $faker->unique()->randomNumber($nbDigits = 30),
        'CA_ID' => $faker->unique()->randomNumber($nbDigits = 30),
        'CA_NO' => $faker->unique()->randomNumber($nbDigits = 20),
        'CA_WK_PLACE' => $faker->city,
        'CA_CP_TEL' => $faker->phoneNumber,
        'CA_CP_ADD' => $faker->address,
        'CA_OWN_NM' => $faker->name,
        'INPUT_ID' => $faker->unique()->randomNumber($nbDigits = 30),
        'INPUT_DATE' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),

    ];
});

$factory->define(App\Driver::class, function (Faker $faker) {
    $date = Carbon::create(2000, 1, 1, 0, 0, 0);
    return [
        'CP_ID' => $faker->unique()->randomNumber($nbDigits = 30),
        'DR_ID' => $faker->unique()->randomNumber($nbDigits = 30),
        'DR_NM' => $faker->name,
        'DR_TEL' => $faker->phoneNumber,
        'DR_HP' => $faker->phoneNumber,
        'DR_JOIN_DATE' => $date->addWeeks(rand(1, 900))->format('YYYY-mm-dd'),
        'DR_EMAIL' => $faker->email,
        'DR_ADD' => $faker->address,
        'INPUT_ID' => $faker->unique()->randomNumber($nbDigits = 30),
        'INPUT_DATE' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),

    ];
});

$factory->define(App\Allocation::class, function (Faker $faker) {
    $date = Carbon::create(2000, 1, 1, 0, 0, 0);
    return [
        'CP_ID' => $faker->unique()->randomNumber($nbDigits = 30),
        'CA_ID' => $faker->unique()->randomNumber($nbDigits = 30),
        'DR_ID' => $faker->unique()->randomNumber($nbDigits = 30),
        'AC_ID' => $faker->unique()->randomNumber($nbDigits = 30),
        'DS_ID' => $faker->unique()->randomNumber($nbDigits = 30),
        'AL_DATE' => $date->addWeeks(rand(1, 900))->format('YYYY-mm-dd'),
        'AL_ITEM' => $faker->word,
        'AL_QTY' => $faker->randomNumber($nbDigits = 3),
        'AL_UNIT_COST' => $faker->randomNumber($nbDigits = 5),
        'AL_LOAD_PLACE' => $faker->city,
        'AL_DISCHARGE_PLACE' => $faker->city,
        'AL_DEMAND_AMT' => $faker->randomNumber($nbDigits = 6),
        'AL_PAY_AMT' => $faker->randomNumber($nbDigits = 6),
        'AL_FEE_RATE' => $faker->randomNumber($nbDigits = 2),
        'AL_FEE' => $faker->randomNumber($nbDigits = 5),
        'INPUT_ID' => $faker->unique()->randomNumber($nbDigits = 30),
        'INPUT_DATE' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),

    ];
});
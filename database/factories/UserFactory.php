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
	$faker = \Faker\Factory::create('ko_KR');
    return [
	'CP_ID' => $faker->numberBetween(0, 9999999999),
        'CP_SEQ' => $faker->numberBetween(0, 99),
        'CP_NM' => $faker->company,
        'CP_REG_NO' => $faker->numberBetween(0, 9999999999),
        'CP_CEO' => $faker->name,
        'CP_COR_NO' => $faker->numberBetween(0, 9999999999),
        'CP_TEL' => $faker->phoneNumber,
        'CP_FAX' => $faker->phoneNumber,
        'CP_ADD' => $faker->address,
        'INPUT_ID' => $faker->numberBetween(0, 9999999999),
    ];
});

$factory->define(App\User::class, function (Faker $faker) {
	$faker = \Faker\Factory::create('ko_KR');
    return [
        'CP_ID' => $faker->numberBetween(0, 9999999999),
        'US_ID' => $faker->numberBetween(0, 9999999999),
        'US_PWD' => str_random(10),
        'US_NM' => $faker->name,
        'US_AUTH' => str_random(1),
        'INPUT_ID' => $faker->numberBetween(0, 9999999999),
    ];
});

$factory->define(App\Account::class, function (Faker $faker) {
	$faker = \Faker\Factory::create('ko_KR');
    return [
        'CP_ID' => $faker->numberBetween(0, 9999999999),
        'AC_ID' => $faker->numberBetween(0, 9999999999),
        'AC_NM' => $faker->company,
        'AC_TEL' => $faker->phoneNumber,
        'AC_FAX' => $faker->phoneNumber,
        'AC_CEO' => $faker->name,
        'AC_EMAIL' => $faker->email,
        'AC_ADD' => $faker->address,
        'AC_EMP' => $faker->name,
        'INPUT_ID' => $faker->numberBetween(0, 9999999999),

    ];
});

$factory->define(App\Car::class, function (Faker $faker) {
	$faker = \Faker\Factory::create('ko_KR');
    return [
        'CP_ID' => $faker->numberBetween(0, 9999999999),
        'CA_ID' => $faker->numberBetween(0, 9999999999),
        'CA_NO' => $faker->numberBetween(0, 9999999999),
        'CA_WK_PLACE' => $faker->city,
        'CA_CP_TEL' => $faker->phoneNumber,
        'CA_CP_ADD' => $faker->address,
        'CA_OWN_NM' => $faker->name,
        'INPUT_ID' => $faker->numberBetween(0, 9999999999),

    ];
});

$factory->define(App\Driver::class, function (Faker $faker) {
	$faker = \Faker\Factory::create('ko_KR');
    return [
        'CP_ID' => $faker->numberBetween(0, 9999999999),
        'DR_ID' => $faker->numberBetween(0, 9999999999),
        'DR_NM' => $faker->name,
        'DR_TEL' => $faker->phoneNumber,
        'DR_HP' => $faker->phoneNumber,
        'DR_JOIN_DATE' => $faker->date($format = 'Y-m-d', $max ='now'),
        'DR_EMAIL' => $faker->email,
        'DR_ADD' => $faker->address,
        'INPUT_ID' => $faker->numberBetween(0, 9999999999),

    ];
});

$factory->define(App\Allocation::class, function (Faker $faker) {
	$faker = \Faker\Factory::create('ko_KR');
    return [
        'CP_ID' => $faker->numberBetween(0, 9999999999),
        'CA_ID' => $faker->numberBetween(0, 9999999999),
        'DR_ID' => $faker->numberBetween(0, 9999999999),
        'AC_ID' => $faker->numberBetween(0, 9999999999),
        'DS_ID' => $faker->numberBetween(0, 9999999999),
        'AL_DATE' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'AL_ITEM' => $faker->word,
        'AL_QTY' => $faker->numberBetween(0, 9999),
        'AL_UNIT_COST' => $faker->numberBetween(0, 9999999),
        'AL_LOAD_PLACE' => $faker->city,
        'AL_DISCHARGE_PLACE' => $faker->city,
        'AL_DEMAND_AMT' => $faker->numberBetween(0, 99999999),
        'AL_PAY_AMT' => $faker->numberBetween(0, 99999999),
        'AL_FEE_RATE' => $faker->numberBetween(0, 99),
        'AL_FEE' => $faker->numberBetween(0, 999999),
        'INPUT_ID' => $faker->numberBetween(0, 9999999999),
    ];
});

<?php

use Faker\Generator as Faker;

$factory->define(\App\Siswa::class, function (Faker $faker) {
    return [
        'user_id' => 100,
        'nama_depan' => $faker->name,
        'nama_belakang' => '',
        'jenis_kelamin' => $faker->randomElement(['L','P']),
        'agama' => $faker->randomElement(['Islam','Katolik','Protestan','Budha','Hindu']),
        'alamat' => $faker->address,
        'tempat_lahir' => $faker->city,
        'tanggal_lahir' => $faker->date('Y-m-d'),
        'nama_ayah' => $faker->name,
        'nama_ibu' => $faker->name,
        'nisn' => 999,
        'tlp' => 000000,
        'jurusan' => $faker->company,
    ];
});

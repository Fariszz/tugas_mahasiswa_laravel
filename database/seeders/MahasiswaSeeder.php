<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i <= 10; $i++) {
            DB::table('mahasiswa')->insert([
                'nim' => $faker->numerify('##########'),
                'nama' => $faker->name(),
                'kelas' => '2A',
                'jurusan' => 'Teknologi Informasi',
                'no_handphone' => $faker->phoneNumber(),
                'E_mail' => $faker->email(),
                'Tanggal_Lahir' => $faker->date(),
            ]);
        }
    }
}

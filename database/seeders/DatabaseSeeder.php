<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Data;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Data::create([
            "nama" => "Ahmad Wahyu Awaldudin",
            "nim" => "201011400908",
            "alamat" => "Teknik Informatika"
        ]);
        Data::create([
            "nama" => "Jalu amar",
            "nim" => "120931291020",
            "alamat" => "Teknik Informatika"
        ]);
        Data::create([
            "nama" => "Awaldudin",
            "nim" => "292910292990",
            "alamat" => "Teknik Informatika"
        ]);
    }
}

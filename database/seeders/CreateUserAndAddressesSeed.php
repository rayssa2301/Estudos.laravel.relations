<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUserAndAddressesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            "name" => "Filhote tote Snow",
            "email" => "totinho@gmail.com",
            "password" => Hash::make("767676"),
        ]);
        DB::table('addresses')->insert([
            "address" => "Rua dos pompons, nº 2222",

        ]);
    }
}

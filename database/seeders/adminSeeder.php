<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;



class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        User::create([

            'userName' => 'admin',
            'email' => 'admin@youcode.ma',
            'isAdmin' => true,
            'password' => bcrypt("123456")

        ]);
    }
}

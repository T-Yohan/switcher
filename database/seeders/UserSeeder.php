<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = [
            'name' => 'Admin Test',
            'email'=> 'admin@test.com',
            'is_admin'=>true,
            'password'=> Hash::make('12345678'),
        ];
        DB::table('users')->insert($user);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '01098591011',
            'fatherjob' => 'Admin',
            'password' => Hash::make('123456'),
            'city' => 'Cairo',
            'type' => 'admin',
            'ip' => '105.202.28.141',
        ]);
    }
}

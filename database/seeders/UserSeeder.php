<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Silvia Prada',
            'email' => 'silviaprada@gmail.com',
            'password' => Hash::make('12345'),
            'phone' => '085706377366',
            'alamat' => 'Kalipare, Malang',
            'role' => 'admin',
        ]);
    }
}
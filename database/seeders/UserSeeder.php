<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $in['name'] = 'Kanti Wilujeng';
        $in['email'] = 'kanti7w@gmail.com';
        $in['password'] = bcrypt('password');
        $in['address'] = 'Malang';
        $in['phone'] = '085647588384';
        $in['role'] = '2';
        User::create($in);
    }
}

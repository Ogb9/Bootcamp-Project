<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        User::create([
            'name' => 'Calvin Mark',
            'reg_no' => '20/ALFT/001',
            'email' => 'd.drogba',
            'password' => 'mistakenl'
          ]);
    }
}

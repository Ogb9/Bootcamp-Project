<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserType;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(['Administrator', 'Student', 'Lecturer'] as $role)
            UserType::create([
                'role' => $role
            ]);



        // UserType::find(2)->users()->attach(2);
    }
}

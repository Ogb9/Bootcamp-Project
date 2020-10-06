<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //    $newsuser = new suser();
    //    $newsuser->First_Name = 'samson';
    //    $newsuser->Last_Name = 'mfon';
    //    $newsuser->save()
    Student::create([
       'full_name' => 'Didier Drogba',
       'reg_no' => '20/EG/509',
       'username' => 'd.drogba',
       'password' => 'mistakenl'
     ]);
    }
}

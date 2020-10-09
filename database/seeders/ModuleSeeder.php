<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Module;
use App\Models\User;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Module::create([
            'title' => 'Laravel',
            'description' => 'The Framework'
        ]);
        Module::create([
            'title' => 'PHP',
            'description' => 'The script'
        ]);
        Module::create([
            'title' => 'HTML',
            'description' => 'The skeleton'
        ]);
        Module::create([
            'title' => 'Javascript',
            'description' => 'A popular scriptor'
        ]);
        Module::create([
            'title' => 'Bootstrap',
            'description' => 'The Stylist'
        ]);
        //Link modules to student
        // $student1 = Student::find(2);
        // $student1->modules()->attach([1,2,4]);

        // User::find(2)->modules()->attach([2, 3, 5]);
    }
}

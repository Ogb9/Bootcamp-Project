<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Grade;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grade::create([
            'user_id' => 1,
            'module_id' => 1,
        ]);
    }
}

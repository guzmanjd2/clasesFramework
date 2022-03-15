<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create(
            [
                'id'=>1,
                'name'=>'Jose David Guzman',
                'career'=>'Ing Sistemas Informaticos',
                'age'=>27,
            ],
            []
        );
    }
}

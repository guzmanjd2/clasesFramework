<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::insert(
            [
                [
                    'id' => 1,
                    'department_name' => 'La libertad',
                ],
                [
                    'id' => 2,
                    'department_name' => 'San Salvador',
                ],
                [
                    'id' => 3,
                    'department_name' => 'Santa Ana',
                ]
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use App\Models\Municipality;
use Illuminate\Database\Seeder;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Municipality::insert(
            [
                [
                    'id' => 1,
                    'municipality_name' => 'Huizucar',
                    'department_id' => 1,
                ],
                [
                    'id' => 2,
                    'municipality_name' => 'San Salvador',
                    'department_id' => 2,
                ],
                [
                    'id' => 3,
                    'municipality_name' => 'San Jose Villanueva',
                    'department_id' => 3,
                ]
            ]
        );
    }
}

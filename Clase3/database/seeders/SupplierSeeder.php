<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supplier::insert([
            [
              'id' => 1,
              'supplierName' => 'Unilever',
              'address' => 'San Salvador',
              'phoneNumber' => '2525-8987',
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now()
          ],
          [
            'id' => 2,
              'supplierName' => 'Orange',
              'address' => 'Santa Ana',
              'phoneNumber' => '2777-8987',
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now()
          ],
          
      ]);
    }
}

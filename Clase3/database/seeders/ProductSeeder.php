<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Product::insert([
        [
          'id' => 1,
          'productName' => 'Detergente',
          'price' => 1.25,
          'barcode' => 12345678,
          'supplier_id'=>1,
          'user_id'=>1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
      ],
      [
        'id' => 2,
        'productName' => 'Camisa',
        'price' => 8.50,
        'barcode' => 12658988,
        'supplier_id'=>2,
        'user_id'=>2,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
      ],
  ]);
    
       /* Product::insert(
        [
            [
                'id'=>1,
                'product_code'=>'AB12345',
                'product_name'=>'Mangos',
            ],
            [
                'id'=>2,
                'product_code'=>'CD6789',
                'product_name'=>'Toallas',
            ]
        ]); */
    }
}

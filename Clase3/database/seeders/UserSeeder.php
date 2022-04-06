<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
              'id' => 1,
              'name' => 'Wilmar Osorio',
              'email' => 'admin@admin.com',
              'email_verified_at' => now(),
              'password' => Hash::make('12345678'), // password
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now()
          ],
          [
            'id' => 2,
              'name' => 'Giovanni Tzec',
              'email' => 'giovanni.tzec@gmail.com',
              'email_verified_at' => now(),
              'password' => Hash::make('password'), // password
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now()
          ],

   ]);

    }
}

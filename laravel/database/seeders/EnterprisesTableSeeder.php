<?php

namespace Database\Seeders;

use App\Models\Enterprise;
use Illuminate\Database\Seeder;

class EnterprisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Enterprise::truncate();

        Enterprise::create([
            'name' => 'enterprise 1',
            'address' => 'address 1',
            'postcode' => '75001',
            'city' => 'paris',
            'phone_number' => '0102030405',
            'email' => 'e1@gmail.com'
        ]);

        Enterprise::create([
            'name' => 'enterprise 2',
            'address' => 'address 2',
            'postcode' => '75002',
            'city' => 'marseilles',
            'phone_number' => '0102020405',
            'email' => 'e2@gmail.com'
        ]);

        Enterprise::create([
            'name' => 'enterprise 3',
            'address' => 'address 3',
            'postcode' => '75003',
            'city' => 'paris',
            'phone_number' => '1102030405',
            'email' => 'e3@gmail.com'
        ]);
    }
}

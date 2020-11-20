<?php

namespace Database\Seeders;

use App\Models\Employee;
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
            'name' => 'Amazon',
            'address' => 'address 1',
            'postcode' => '75001',
            'city' => 'paris',
            'phone_number' => '0102030405',
            'email' => 'amazon@gmail.com'
        ]);

        Enterprise::create([
            'name' => 'Facebook',
            'address' => 'address 2',
            'postcode' => '75002',
            'city' => 'marseille',
            'phone_number' => '0102020405',
            'email' => 'fb@gmail.com'
        ]);

        Enterprise::create([
            'name' => 'Apple',
            'address' => 'address 3',
            'postcode' => '75003',
            'city' => 'lyon',
            'phone_number' => '1102030405',
            'email' => 'apple@gmail.com'
        ]);
    }
}

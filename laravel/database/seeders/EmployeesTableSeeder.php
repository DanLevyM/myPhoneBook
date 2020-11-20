<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::truncate();

        $employee = Employee::create([
            'sexe' => 'M',
            'last_name' => 'aaaaa',
            'first_name' => 'bbbbb',
            'address' => '50 av aaa',
            'postcode' => '33333',
            'city' => 'paris',
            'phone_number' => '0909090909',
            'email' => 'lui@gmail.com',
        ]);
    }
}

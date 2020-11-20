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

        Employee::create([
            'sexe' => 'M',
            'last_name' => 'aaaaa',
            'first_name' => 'aaaa',
            'address' => '50 av aaa',
            'postcode' => '33333',
            'city' => 'paris',
            'phone_number' => '0909090909',
            'email' => 'lui@gmail.com',
        ]);

        Employee::create([
            'sexe' => 'M',
            'last_name' => 'bbb',
            'first_name' => 'bbbbb',
            'address' => '50 av bbbb',
            'postcode' => '33333',
            'city' => 'paris',
            'phone_number' => '0000000000',
            'email' => 'bbbbbb@gmail.com',
        ]);

        Employee::create([
            'sexe' => 'M',
            'last_name' => 'ccccc',
            'first_name' => 'cccccc',
            'address' => '50 av ccccc',
            'postcode' => '33333',
            'city' => 'paris',
            'phone_number' => '9999999999',
            'email' => 'ccccc@gmail.com',
        ]);

        $employee = Employee::create([
            'sexe' => 'M',
            'last_name' => 'ddd',
            'first_name' => 'dddddd',
            'address' => '50 av ddddd',
            'postcode' => '33333',
            'city' => 'paris',
            'phone_number' => '1111111111',
            'email' => 'dd@gmail.com',
        ]);

        $employee = Employee::create([
            'sexe' => 'M',
            'last_name' => 'ee',
            'first_name' => 'eeeeee',
            'address' => '50 av ee',
            'postcode' => '33333',
            'city' => 'paris',
            'phone_number' => '2222222222',
            'email' => 'ee@gmail.com',
        ]);

        $employee = Employee::create([
            'sexe' => 'M',
            'last_name' => 'ff',
            'first_name' => 'fffff',
            'address' => '50 av fff',
            'postcode' => '33333',
            'city' => 'paris',
            'phone_number' => '9897939292',
            'email' => 'fff@gmail.com',
        ]);

        $employee = Employee::create([
            'sexe' => 'M',
            'last_name' => 'gg',
            'first_name' => 'gggg',
            'address' => '50 av gg',
            'postcode' => '33333',
            'city' => 'paris',
            'phone_number' => '1213141516',
            'email' => 'gg@gmail.com',
        ]);

        $employee = Employee::create([
            'sexe' => 'M',
            'last_name' => 'hh',
            'first_name' => 'hhhhh',
            'address' => '50 av hh',
            'postcode' => '33333',
            'city' => 'paris',
            'phone_number' => '7777777777',
            'email' => 'hh@gmail.com',
        ]);
    }
}

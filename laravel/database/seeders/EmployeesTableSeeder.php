<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Enterprise;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('employee_enterprise')->truncate();

        $employee1 = Employee::create([
            'sexe' => 'M',
            'last_name' => 'aaaaa',
            'first_name' => 'aaaa',
            'address' => '50 av aaa',
            'postcode' => '33333',
            'city' => 'paris',
            'phone_number' => '0909090909',
            'email' => 'lui@gmail.com',
        ]);

        $employee2 = Employee::create([
            'sexe' => 'M',
            'last_name' => 'bbb',
            'first_name' => 'bbbbb',
            'address' => '50 av bbbb',
            'postcode' => '33333',
            'city' => 'paris',
            'phone_number' => '0000000000',
            'email' => 'bbbbbb@gmail.com',
        ]);

        $employee3 = Employee::create([
            'sexe' => 'M',
            'last_name' => 'ccccc',
            'first_name' => 'cccccc',
            'address' => '50 av ccccc',
            'postcode' => '33333',
            'city' => 'paris',
            'phone_number' => '9999999999',
            'email' => 'ccccc@gmail.com',
        ]);

        $employee4 = Employee::create([
            'sexe' => 'M',
            'last_name' => 'ddd',
            'first_name' => 'dddddd',
            'address' => '50 av ddddd',
            'postcode' => '33333',
            'city' => 'paris',
            'phone_number' => '1111111111',
            'email' => 'dd@gmail.com',
        ]);

        $employee5 = Employee::create([
            'sexe' => 'M',
            'last_name' => 'ee',
            'first_name' => 'eeeeee',
            'address' => '50 av ee',
            'postcode' => '33333',
            'city' => 'paris',
            'phone_number' => '2222222222',
            'email' => 'ee@gmail.com',
        ]);

        $employee6 = Employee::create([
            'sexe' => 'M',
            'last_name' => 'ff',
            'first_name' => 'fffff',
            'address' => '50 av fff',
            'postcode' => '33333',
            'city' => 'paris',
            'phone_number' => '9897939292',
            'email' => 'fff@gmail.com',
        ]);

        $employee7 = Employee::create([
            'sexe' => 'M',
            'last_name' => 'gg',
            'first_name' => 'gggg',
            'address' => '50 av gg',
            'postcode' => '33333',
            'city' => 'paris',
            'phone_number' => '1213141516',
            'email' => 'gg@gmail.com',
        ]);

        $employee8 = Employee::create([
            'sexe' => 'M',
            'last_name' => 'hh',
            'first_name' => 'hhhhh',
            'address' => '50 av hh',
            'postcode' => '33333',
            'city' => 'paris',
            'phone_number' => '7777777777',
            'email' => 'hh@gmail.com',
        ]);

        $employee1Entreprise = Enterprise::where('id', 1)->first();
        $employee2Entreprise = Enterprise::where('id', 1)->first();
        $employee3Entreprise = Enterprise::where('id', 1)->first();
        $employee4Entreprise = Enterprise::where('id', 2)->first();
        $employee5Entreprise = Enterprise::where('id', 2)->first();
        $employee6Entreprise = Enterprise::where('id', 2)->first();
        $employee7Entreprise = Enterprise::where('id', 2)->first();
        $employee8Entreprise = Enterprise::where('id', 3)->first();
        
        $employee1->enterprises()->attach($employee1Entreprise);
        $employee2->enterprises()->attach($employee2Entreprise);
        $employee3->enterprises()->attach($employee3Entreprise);
        $employee4->enterprises()->attach($employee4Entreprise);
        $employee5->enterprises()->attach($employee5Entreprise);
        $employee6->enterprises()->attach($employee6Entreprise);
        $employee7->enterprises()->attach($employee7Entreprise);
        $employee8->enterprises()->attach($employee8Entreprise);
    }
}

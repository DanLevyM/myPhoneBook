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
            'last_name' => 'Collaborateur 1',
            'first_name' => 'Collaborateur 1',
            'address' => '50 av aaa',
            'postcode' => '33333',
            'city' => 'paris',
            'phone_number' => '0000000000',
            'email' => 'collaborateur1@gmail.com',
        ]);

        $employee2 = Employee::create([
            'sexe' => 'M',
            'last_name' => 'Collaborateur 2',
            'first_name' => 'Collaborateur 2',
            'address' => '50 av bbbb',
            'postcode' => '33333',
            'city' => 'paris',
            'phone_number' => '0000000001',
            'email' => 'collaborateur2@gmail.com',
        ]);

        $employee3 = Employee::create([
            'sexe' => 'M',
            'last_name' => 'Collaborateur 3',
            'first_name' => 'Collaborateur 3',
            'address' => '50 av ccccc',
            'postcode' => '33333',
            'city' => 'paris',
            'phone_number' => '0000000002',
            'email' => 'collaborateur3@gmail.com',
        ]);

        $employee4 = Employee::create([
            'sexe' => 'M',
            'last_name' => 'Collaborateur 4',
            'first_name' => 'Collaborateur 4',
            'address' => '50 av ddddd',
            'postcode' => '33333',
            'city' => 'paris',
            'phone_number' => '0000000003',
            'email' => 'collaborateur4@gmail.com',
        ]);

        $employee5 = Employee::create([
            'sexe' => 'M',
            'last_name' => 'Collaborateur 5',
            'first_name' => 'Collaborateur 5',
            'address' => '50 av ee',
            'postcode' => '33333',
            'city' => 'paris',
            'phone_number' => '0000000004',
            'email' => 'collaborateur5@gmail.com',
        ]);

        $employee6 = Employee::create([
            'sexe' => 'M',
            'last_name' => 'Collaborateur 6',
            'first_name' => 'Collaborateur 6',
            'address' => '50 av fff',
            'postcode' => '33333',
            'city' => 'paris',
            'phone_number' => '0000000005',
            'email' => 'collaborateur6@gmail.com',
        ]);

        $employee7 = Employee::create([
            'sexe' => 'M',
            'last_name' => 'Collaborateur 7',
            'first_name' => 'Collaborateur 7',
            'address' => '50 av gg',
            'postcode' => '33333',
            'city' => 'paris',
            'phone_number' => '0000000006',
            'email' => 'collaborateur7@gmail.com',
        ]);

        $employee8 = Employee::create([
            'sexe' => 'M',
            'last_name' => 'Collaborateur 8',
            'first_name' => 'Collaborateur 8',
            'address' => '50 av hh',
            'postcode' => '33333',
            'city' => 'paris',
            'phone_number' => '0000000007',
            'email' => 'collaborateur8@gmail.com',
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

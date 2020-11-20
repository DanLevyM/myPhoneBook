<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Enterprise;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('employee_enterprise')->truncate();

        $enterprise1 = Enterprise::create([
            'name' => 'enterprise 1',
            'address' => 'address 1',
            'postcode' => '75001',
            'city' => 'paris',
            'phone_number' => '0102030405',
            'email' => 'e1@gmail.com'
        ]);

        $enterprise2 = Enterprise::create([
            'name' => 'enterprise 2',
            'address' => 'address 2',
            'postcode' => '75002',
            'city' => 'marseilles',
            'phone_number' => '0102020405',
            'email' => 'e2@gmail.com'
        ]);

        $enterprise3 = Enterprise::create([
            'name' => 'enterprise 3',
            'address' => 'address 3',
            'postcode' => '75003',
            'city' => 'paris',
            'phone_number' => '1102030405',
            'email' => 'e3@gmail.com'
        ]);

        $enterprise1Employee = Employee::where('id', 1)->first();
        $enterprise2Employee = Employee::where('id', 2)->first();
        $enterprise3Employee = Employee::where('id', 3)->first();
        $enterprise4Employee = Employee::where('id', 4)->first();
        $enterprise5Employee = Employee::where('id', 5)->first();
        $enterprise6Employee = Employee::where('id', 6)->first();
        $enterprise7Employee = Employee::where('id', 7)->first();
        $enterprise8Employee = Employee::where('id', 8)->first();

        $enterprise1->employees()->attach($enterprise1Employee);
        $enterprise2->employees()->attach($enterprise2Employee);
        $enterprise2->employees()->attach($enterprise3Employee);
        $enterprise2->employees()->attach($enterprise4Employee);
        $enterprise3->employees()->attach($enterprise5Employee);
        $enterprise3->employees()->attach($enterprise6Employee);
        $enterprise3->employees()->attach($enterprise7Employee);
        $enterprise3->employees()->attach($enterprise8Employee);
    }
}

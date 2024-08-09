<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'name' => 'Test1',
            'email' => 'test1@gmail.com',
            'position' => 'Manager',
            'salary' => 60000.00,
        ]);

        Employee::create([
           'name' => 'Test2',
            'email' => 'test2@gmail.com',
            'position' => 'Developer',
            'salary' => 50000.00,
        ]);

        Employee::create([
            'name' => 'Test3',
            'email' => 'test3@gmail.com',
            'position' => 'Designer',
            'salary' => 45000.00,
        ]);

        Employee::create([
            'name' => 'Test4',
            'email' => 'test4@gmail.com',
            'position' => 'Sales',
            'salary' => 55000.00,
        ]);

        Employee::create([
            'name' => 'Test5',
            'email' => 'test5@gmail.com',
            'position' => 'HR Specialist',
            'salary' => 47000.00,
        ]);

        Employee::create([
            'name' => 'Test6',
            'email' => 'test6@gmail.com',
            'position' => 'Marketing Manager',
            'salary' => 65000.00,
        ]);

        Employee::create([
            'name' => 'Test7',
            'email' => 'test7@gmail.com',
            'position' => 'UX Researcher',
            'salary' => 48000.00,
        ]);

        Employee::create([
            'name' => 'Test8',
            'email' => 'test8@gmail.com',
            'position' => 'Data Scientist',
            'salary' => 70000.00,
        ]);

        Employee::create([
            'name' => 'Test9',
            'email' => 'test9@gmail.com',
            'position' => 'Web Developer',
            'salary' => 52000.00,
        ]);

        Employee::create([
            'name' => 'Test10',
            'email' => 'test10@gmail.com',
            'position' => 'Product Manager',
            'salary' => 75000.00,
        ]);
    }
}

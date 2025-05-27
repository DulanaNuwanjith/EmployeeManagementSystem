<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function store()
    {
        $employee = Employee::create([
            'profilephoto' => 'photo.png',
            'fullname' => 'John Doe',
            'initialsname' => 'J. Doe',
            'dob' => '1995-08-15',
            'age' => 29,
            'gender' => 'Male',
            'civilstatus' => 'Single',
            'address' => 'Colombo, Sri Lanka',
            'nic' => '950815123V',
            'contactnumber' => '0771234567',
            'email' => 'john@example.com',

            'education' => [
                'advanced_level' => [
                    ['subject' => 'Maths', 'result' => 'A'],
                    ['subject' => 'Physics', 'result' => 'B'],
                    ['subject' => 'Chemistry', 'result' => 'A'],
                    ['subject' => 'English', 'result' => 'C'],
                ],
                'ordinary_level' => [
                    ['subject' => 'Maths', 'result' => 'A'],
                    ['subject' => 'English', 'result' => 'A'],
                    ['subject' => 'Sinhala', 'result' => 'A'],
                    ['subject' => 'History', 'result' => 'A'],
                    ['subject' => 'Science', 'result' => 'A'],
                    ['subject' => 'Buddhism', 'result' => 'A'],
                    ['subject' => 'Commerce', 'result' => 'A'],
                    ['subject' => 'Health', 'result' => 'A'],
                    ['subject' => 'Lit', 'result' => 'A'],
                ],
                'higher_education' => 'BSc in Computer Science',
            ],

            'serviceexperience' => [
                [
                    'organization' => 'ABC Pvt Ltd',
                    'address' => 'Colombo',
                    'designation' => 'Developer',
                    'time_duration' => '2 years',
                ],
                [
                    'organization' => 'XYZ Corp',
                    'address' => 'Kandy',
                    'designation' => 'Senior Developer',
                    'time_duration' => '1 year',
                ]
            ],

            'familydetails' => [
                [
                    'name' => 'Jane Doe',
                    'relationship' => 'Mother',
                    'contact_number' => '0779876543',
                    'occupation' => 'Teacher',
                    'address' => 'Kandy, Sri Lanka',
                ],
                [
                    'name' => 'Jack Doe',
                    'relationship' => 'Father',
                    'contact_number' => '0771234567',
                    'occupation' => 'Engineer',
                    'address' => 'Kandy, Sri Lanka',
                ]
            ],
        ]);

        $data = $request->all();

        $data['id'] = 'EMP' . strtoupper(uniqid());

        $employee = Employee::create($data);

        return response()->json($employee);
    }
}

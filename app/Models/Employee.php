<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Employee extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'employees';

    protected $fillable = [
        'emp_id', 'profile_photo', 'full_name', 'initials_name', 'dob', 'age', 'gender',
        'civil_status', 'address', 'nic', 'contact_number', 'email',
        'education', 'service_experience', 'family_details'
    ];

}

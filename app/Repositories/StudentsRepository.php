<?php

namespace App\Repositories;

use App\Models\Student;

class StudentsRepository
{

    public function all()
    {
        return Student::all();
    }
}

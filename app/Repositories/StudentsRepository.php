<?php

namespace App\Repositories;

use App\Models\Student;

class StudentsRepository
{

    public function all()
    {
        return Student::all();
    }

    public function destroy($id)
    {
        Student::destroy($id);
    }

    public function find($id)
    {
        return Student::find($id);
    }

    public function update(Student $student)
    {
        $student->update();
    }

    public function store(Student $student)
    {
        $student->save();
    }
}

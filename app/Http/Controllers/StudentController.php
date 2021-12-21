<?php

namespace App\Http\Controllers;

use App\Repositories\StudentsRepository;

class StudentController extends Controller
{
    private $studentsRepository;

    /**
     * @param StudentsRepository $studentsRepository
     */
    public function __construct(StudentsRepository $studentsRepository)
    {
        $this->studentsRepository = $studentsRepository;
    }


    public function index()
    {
        $students = $this->studentsRepository->all();
        return view('students.index', compact('students'));
    }

    public function view($id)
    {
        return view('students.view');
    }

    public function edit($id)
    {
        return view('students.edit');
    }

    public function create()
    {
        return view('students.create');
    }
}

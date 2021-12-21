<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Repositories\StudentsRepository;
use Illuminate\Http\Request;

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

    public function create()
    {
        return view('students.create');
    }

    public function show($id)
    {
        $student = $this->studentsRepository->find($id);
        return view('students.view', compact('student'));
    }

    public function edit($id)
    {
        $student = $this->studentsRepository->find($id);
        return view('students.edit', compact('student'));
    }

    public function store(Request $request)
    {
        $student = new Student($request->all());
        $this->studentsRepository->store($student);
    }

    public function update(Request $request, $id)
    {
        $student = new Student($request->all());
        $this->studentsRepository->update($student);
    }

    public function destroy($id)
    {
        $this->studentsRepository->destroy($id);
    }
}

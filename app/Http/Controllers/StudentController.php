<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index');
    }

    public function show()
    {
        $student = Student::find(request('id'));
        return view('students.index', ['student' => $student]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $query = Student::query();
        $query = $query->where('grade_id', $request->input('grade_id', 1));
        $students = $query->get();
        return view('admin.students.index', compact(['students']));
    }
}

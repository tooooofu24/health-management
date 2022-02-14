<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Grade;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function class(Request $request, $id)
    {
        $class = Grade::findOrFail($id);
        $students = Student::where('grade_id', $id)->orderBy('number')->get();
        $date = $request->input('date', Carbon::today()->toDateString());
        $answer_data = Answer::where('date', $date)->whereIn('student_id', $students->pluck('id'))->get();
        $answers = [];
        foreach ($students as $student) {
            $data = $answer_data;
            $answers[] = $data->where('student_id', $student->id)->first();
        }
        return view('admin.class', compact(['answers', 'date', 'class']));
    }
}

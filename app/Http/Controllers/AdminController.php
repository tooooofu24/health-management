<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Club;
use App\Models\Grade;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class AdminController extends Controller
{
    public function index()
    {
        $classes = Grade::all();
        $clubs = Club::all();
        return view('admin.index', compact(['classes', 'clubs']));
    }

    public function class(Request $request, $id)
    {
        $class = Grade::findOrFail($id);
        $student_data = Student::where('grade_id', $id)->orderBy('number')->get();
        $date = $request->input('date', Carbon::today()->toDateString());
        $answer_data = Answer::where('date', $date)->whereIn('student_id', $student_data->pluck('id'))->get();
        $students = [];
        foreach ($student_data as $student) {
            $data = $answer_data;
            $answer = $data->where('student_id', $student->id)->first();
            $student->answer = $answer;
            $students[] = $student;
        }
        return view('admin.class', compact(['students', 'date', 'class']));
    }

    public function club(Request $request, $id)
    {
        $club = Club::findOrFail($id);
        $student_data = Student::where('club_id', $id)->orderBy('grade_id', 'desc')->get();
        $date = $request->input('date', Carbon::today()->toDateString());
        $answer_data = Answer::where('date', $date)->whereIn('student_id', $student_data->pluck('id'))->get();
        $students = [];
        foreach ($student_data as $student) {
            $data = $answer_data;
            $answer = $data->where('student_id', $student->id)->first();
            $student->answer = $answer;
            $students[] = $student;
        }
        return view('admin.club', compact(['students', 'date', 'club']));
    }

    public function student(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $answers = Answer::where('student_id', $id)->orderBy('date', 'ASC')->get();
        return view('admin.student', compact(['answers', 'student']));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Grade;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function mypage()
    {
        $student = auth()->user()->student;
        $answers = Answer::where('student_id', $student->id)->get();
        return view('mypage.index', compact(['answers']));
    }
}

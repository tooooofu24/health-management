<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        $student = new Student();
        $student->fill($request->all())->save();
        return redirect()->back()->with('flash_message', '登録しました！');
    }

    public function update($id, Request $request)
    {
        $student = Student::findOrFail($id);
        $student->fill($request->all())->save();
        return redirect()->back()->with('flash_message', '更新しました！');
    }
}

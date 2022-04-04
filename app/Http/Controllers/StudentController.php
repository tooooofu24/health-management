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

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $grade_id = $student->grade_id;
        $student->delete();
        return redirect()->route('admin.class', ['id' => $grade_id])->with('flash_message', '削除が完了しました！');
    }
}

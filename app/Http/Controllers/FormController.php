<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Grade;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showPageOne()
    {
        $classes = Grade::query()
            ->orderBy('grade')
            ->orderBy('class')
            ->get();
        return view('form.index', compact(['classes']));
    }
    public function showPageTwo(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {
            $request->session()->put('form.' . $key, $value);
        };
        return view('form.index');
    }

    public function showPageThree(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {
            $request->session()->put('form.' . $key, $value);
        };
        return view('form.index');
    }

    public function showPageFour(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {
            $request->session()->put('form.' . $key, $value);
        };
        return view('form.index');
    }

    public function store(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {
            $request->session()->put('form.' . $key, $value);
        };
        $answer = new Answer();
        $answer->fill($request->session()->get('form'))->save();
        return redirect()->route('form.show.1')->with('flash_message', '回答を送信しました！');
    }
}

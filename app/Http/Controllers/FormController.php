<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submitPageOne(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {
            $request->session()->put($key, $value);
        };
        return view('form.index');
    }

    public function submitPageTwo(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {
            $request->session()->put($key, $value);
        };
        return view('form.index');
    }

    public function submitPageThree(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {
            $request->session()->put($key, $value);
        };
        return view('form.index');
    }
}

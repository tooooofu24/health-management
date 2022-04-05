<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submitPageOne(Request $request)
    {
        dd($request->all());
    }
}

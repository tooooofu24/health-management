<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function check($id)
    {
        $answer = Answer::findOrFail($id);
        $answer->checked_at = now();
        $answer->save();
        return;
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function sum($num1, $num2)
    {
        return $num1 + $num2;
    }
     public function form()
    {
        return view('form');
    }

    public function result(Request $request)
    {
        if ($request->has('number')) {
            $number = (int)$request->input('number');
            $square = $number * $number;
            return view('result', ['square' => $square]);
        }
        return view('result');
    }
        public function formPost()
    {
        return view('form_post');
    }

    public function resultPost(Request $request)
    {
        if ($request->isMethod('post')) {
            $a = (int)$request->input('a');
            $b = (int)$request->input('b');
            $sum = $a + $b;
            return view('result', ['sum' => $sum]);
        }
        return redirect('/test/form');
    }

}

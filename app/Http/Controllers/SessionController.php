<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function setSession(Request $request)
    {
        $request->session()->put('key', 'value');
        return view('sessionSet');
    }

    public function getSession(Request $request)
    {
        $value = $request->session()->get('key');
        return view('sessionGet', ['value' => $value]);
    }

    public function counter(Request $request)
    {
        $counter = $request->session()->get('counter', 1);
        $request->session()->put('counter', $counter + 1);
        return view('counter', ['counter' => $counter]);
    }

    public function firstVisitTime(Request $request)
    {
        $firstVisitTime = $request->session()->get('firstVisitTime', time());
        $request->session()->put('firstVisitTime', $firstVisitTime);
        return view('firstVisitTime', ['firstVisitTime' => date('Y-m-d H:i:s', $firstVisitTime)]);
    }

    public function pushToArray(Request $request)
    {
        $request->session()->put('numbers', [1, 2, 3]);
        $request->session()->push('numbers', 4);
        $numbers = $request->session()->get('numbers');
        return view('pushToArray', ['numbers' => $numbers]);
    }

    public function forgetSession(Request $request)
    {
        $request->session()->forget('key');
        return view('forgetSession');
    }

    public function pullSession(Request $request)
    {
        $value = $request->session()->pull('key', 'default');
        return view('pullSession', ['value' => $value]);
    }

    public function flushSession(Request $request)
    {
        $request->session()->flush();
        return view('flushSession');
    }

    public function allSession(Request $request)
    {
        $data = $request->session()->all();
        return view('allSession', ['data' => $data]);
    }

    public function checkSession(Request $request)
    {
        $testValue = $request->session()->get('test', time());
        $request->session()->put('test', $testValue);
        $hasTest = $request->session()->has('test');
        return view('checkSession', ['hasTest' => $hasTest, 'testValue' => date('Y-m-d H:i:s', $testValue)]);
    }

    public function sessionHelperSet()
    {
        session(['helperKey' => 'helperValue']);
        return view('sessionHelperSet');
    }

    public function sessionHelperGet()
    {
        $value = session('helperKey');
        return view('sessionHelperGet', ['value' => $value]);
    }
}

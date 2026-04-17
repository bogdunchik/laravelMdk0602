<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pr16Controller extends Controller
{
    public function pr1611(Request $request)
    {
        $request->session()->flash('sms', 'сообзщение');
        return redirect('/pr16/show');
    }
    public function pr1612()
    {
        return view('pr16.view1');
    }
    public function pr1621(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->flash();
            return redirect('/pr16/form');
        }
        return view('pr16.view2');
    }
}

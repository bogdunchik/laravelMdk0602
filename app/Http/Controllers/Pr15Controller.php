<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pr15Controller extends Controller
{
    public function form(Request $request)
    {
        if ($request->isMethod('post')) {
            $num = $request->input('num');
            
            if ($num >= 1 && $num <= 10) {
                return redirect('/pr15/success');
            }
        } 
        return view('pr15.form');
    }
    public function yep()
    {
        return 'форма успешно отправлена';
    }
    public function pr1521(Request $request)
    {
        if ($request->isMethod('post')) {
            $m = $request->input('mail');
            if (filter_var($m, FILTER_VALIDATE_EMAIL)) {
                return redirect('/pr15/mailOk')->with('mail', $m);
            }
            return view('pr15.form2', ['err' => 'мейл некок:(']);
        }
        return view('pr15.form2');
    }

    public function mailOk()
    {
        return view('pr15.res2');
    }

    public function pr1531()
    {
        return redirect()->route('namedPath');
    }

    public function target()
    {
        return 'Вы успешно перешли на именованный маршрут';
    }

    public function pr1541()
    {
        return redirect()->route('pathPars', ['p1' => 'val1', 'p2' => 'val2']);
    }

    public function withPars($p1, $p2)
    {
        return "параметры: $p1, $p2";
    }
}


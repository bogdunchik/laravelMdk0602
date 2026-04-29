<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
class Pr188Controller extends Controller
{
    public function pr1811(Request $request)
    {
        $lastVisit = $request->cookie('last_visit');
        $now = time();

        $res = new Response();

        if ($lastVisit) {
            $diff = $now - $lastVisit;
            $res->setContent("С прошлого захода прошло: $diff секунд");
        } else {
            $res->setContent("nice to meet u");
        }

        return $res->cookie('last_visit', $now, 60);
    }

    public function pr1821(Request $request)
    {
        if ($request->isMethod('post')) {
            $bday = $request->input('bday'); 
            return response('Мы запомнили дату вашего др')
                ->cookie('user_bday', $bday, 10000); 
        }

        $bday = $request->cookie('user_bday');
        if ($bday) {
            $date = Carbon::parse($bday);
            if ($date->isBirthday()) {
                return "С Днем Рождения!";
            }
        }

        return view('pr18.file2');
    }

    public function pr1831(Request $request)
    {
        $count = $request->cookie('counter', 0);
        $count++;

        return response("Вы обновили страницу $count раз")
            ->cookie('counter', $count, 60);
    }
}

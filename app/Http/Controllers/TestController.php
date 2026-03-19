<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function sum($num1, $num2)
    {
        return $num1 + $num2;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function welcome(){
       return view('welcome');
    }

    public function suma(){
        $a = 5;
        $b = 123312;
        $c= $a + $b;

        return "el valor de la suma es $c";
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function test2()
    {
        return view('pages.test2');
    }

    public function test3()
    {
        if(!isset($_POST["name1"])){
            $bau="Hello! Please input your name: <br/>";
        }else{
            $bau="Good morning <b>".$_POST["name1"]."</b><br/>";
        }
        return view('pages.test3')->with('bau',$bau);
    }

}

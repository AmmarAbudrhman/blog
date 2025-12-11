<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function firstAction()
    {
        $name= "welcome to test page";
        $books=['html','Css',"JS"];
        return view('test', ['name'=>$name, 'books'=>$books]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function HomeMain()
    {
        return view('frontend.index');
    }
}

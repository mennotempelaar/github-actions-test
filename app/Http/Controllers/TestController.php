<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __invoke()
    {
        $user = \Auth::user();
        return view('test', compact('user'));
    }
}

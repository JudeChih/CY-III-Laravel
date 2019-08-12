<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        return view('home.index');
    }

    function sayHello(Request $request) {
        // return view("home.hello", 
        //     [ "who" => $request->userName ]);
        return view("home.hello")->withWho($request->userName);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabController extends Controller
{
    function index() {
        return "Lab Controller index action";
    }

    function show($dd,$eee) {
        dd([$dd , $eee]);
    }

    function param(Request $request) {
        // dd($request->all());
        // dd($request->query('data'));
        // dd($request->input());
        dd($request->input('data'));
    }

    function getForm() {
        return view("lab.aForm");
    }

    function postForm(Request $request) {
        // dd($request->input());
        dd($request->input('firstName'));
    }

    function xml() {
        $content = "<book><title>ooo</title><price>500</price></book>";
        return response($content, 200, 
            [
                'Content-Type' => 'application/xml'
            ]);
    }

    function memberOnly(Request $request) {
        $data = $request->all();
        if (!$data['firstName']) {
            return redirect('lab/form');
        }
        $data['name'] = $data['firstName'].$data['lastName'];
        return view("lab.welcome",['data'=>$data]);
    }
}

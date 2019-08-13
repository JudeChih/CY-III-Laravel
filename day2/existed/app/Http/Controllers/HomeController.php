<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Employee;

class HomeController extends Controller
{
    function index() {
        // $d = Department::find(1);
        // return $d->departmentName;

        // $d = Department::find(1)->employees();
        // dd($d->first()->firstName);
        
        // $emp = Employee::find(1);
        // dd($emp->firstName);

        // $d = Employee::find(1)->department();
        // dd($d->first()->departmentName);

        $employeeList = Employee::all();
        return view("home.index", compact('employeeList'));
    }

    public function show($id){
        
        $employeeDetail = Employee::find($id);echo $employeeDetail;
        return view("home.detail", compact('employeeDetail'));
    }

    public function edit($id){
        $employeeDetail = Employee::find($id);
        return view("home.form", compact('employeeDetail'));
    }

    public function update(Request $request ,$id){
        $emp = Employee::find($id);
        $emp->firstName = $request->firstName;
        $emp->lastName = $request->lastName;
        $emp->email = $request->email;
        $emp->title = $request->title;
        $emp->city = $request->city;
        $emp->save();
        return redirect("/");
    }
}

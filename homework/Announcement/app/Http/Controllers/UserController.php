<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userdata;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $old = Userdata::where('ud_account',$request->account)->count();
        echo $old;
        if($old > 0){
            $result = "此帳號已經被註冊";
            return view('register',compact('result'));
        }else{
            $user = new Userdata();
            $user->ud_name = $request->name;
            $user->ud_account = $request->account;
            $user->ud_password = $request->password;
            $user->save();
            setcookie('userdata',$user,time() + 24 * 60 * 60);
            return redirect('/ann');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function checkUser(Request $request){
        $num = Userdata::where('ud_account',$request->account)->where('ud_password',$request->password)->count();
        if($num < 1){
            $result = '帳號密碼有誤，請重新輸入';
            return view('login',compact('result'));
        }else{
            $userdata = Userdata::where('ud_account',$request->account)->where('ud_password',$request->password)->first();
            setcookie('userdata',$userdata,time() + 24 * 60 * 60);
            return redirect('/ann');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ann_data = Announcement::all();
        return view('index',compact('ann_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ann = new Announcement();
        $ann->ann_title = $request->title;
        $ann->ann_image = $request->image;
        $ann->ann_content = $request->content;
        $ann->save();
        return redirect('/ann');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(isset($_COOKIE['userdata'])){
            $ann_data = Announcement::all();
            $ann_detail = Announcement::find($id);
            return view('detail',compact('ann_data','ann_detail'));
        }else{
            return redirect('/login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ann_detail = Announcement::find($id);
        return view('modify',compact('ann_detail'));
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
        $ann = Announcement::find($id);
        $ann->ann_title = $request->title;
        $ann->ann_image = $request->image;
        $ann->ann_content = $request->content;
        $ann->save();
        return redirect('/ann');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ann = Announcement::find($id);
        $ann->delete();
        return redirect('/ann');
    }
}

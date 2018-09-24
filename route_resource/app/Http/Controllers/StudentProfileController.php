<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentprofiles = DB::select('select * from studentprofiles');
        return view('display',compact('studentprofiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::insert('insert into studentprofiles (name, address, email) 
        values (?, ?, ?)', [$request->name, $request->address, $request->email]);

        return redirect()->route('studentprofiles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $studentprofiles = DB::select('select * from studentprofiles where id='.$id);
        //return view('display',compact('studentprofiles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = DB::select('select * from studentprofiles where id='.$id);
        $student = $student[0];
        return view('form_edit',compact('student'));
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
        $flag = DB::update("update studentprofiles set name='".$request->name."', address='".$request->address."', email='".$request->email."' where id=".$id);
        if($flag)
            return redirect()->route('studentprofiles.index');
        else
            return url("/studentprofiles/{$id}/edit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         DB::delete("delete from studentprofiles where id=".$id);
         return 'success';
    }
}

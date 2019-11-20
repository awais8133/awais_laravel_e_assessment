<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Subjects;
use App\User;
use App\Eclass;
use Session;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$subject=Subjects::all();
        //return view('teachers.subjects.set-subject',compact('subject'));
    }

    public function indexwith_id($id)
    {
        $subject=Subjects::all();
        return view('teachers.subjects.set-subject',compact('id','subject'));
    }

    public function set_subject(Request $request, $id)
    {
        
        // dd($request->subject);

        $eclass=Eclass::where('id',$id)->get();
       
        // $user = User::find(Session::get('id'));
        // $nam=eclass->name;
        // $sec=eclass->section;
        // $cod=eclass->code;
        // $userid=eclass->user_id;hp
       
        // $data=array('name'=>(nam),
        // 'section'=> (sec),
        // 'code'=> (cod),
        // 'user_id'=> (userid),
        // 'sub_id'=> (id));

        // $subject = Subjects::where('name',$request->input('subject'))->get();

        // dd($subject);
        // dd($eclass->first()->name);

        DB::table('eclasses')
            ->where('id', $id)
            ->update(['name' => $eclass->first()->name, 
            'section' => $eclass->first()->section,
            'code' => $eclass->first()->code,
            'user_id' => $eclass->first()->user_id,
            'sub_id' =>$request->subject]);
         

        
        return redirect(route('teachers.classes.index'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function show(Subjects $subjects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function edit(Subjects $subjects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subjects $subjects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subjects $subjects)
    {
        //
    }


}

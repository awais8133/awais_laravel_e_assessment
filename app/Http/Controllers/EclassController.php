<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class EclassController extends Controller
{
    public function create()
    {
        return view('teachers.classes.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required|min:15|max:60',
            'section' => 'required|min:3',
            'code' => 'required|min:6',
            ]);

        $user = User::find(Session::get('id'));
        if($user){

            $user->eclasses()->create([
                'name' => $request->name,
                'section' => $request->section,
                'code' => $request->code,
                ]);
                
                return redirect(route('teachers.classes.index'));
        }else{
            return back();
        }
        
    }
}

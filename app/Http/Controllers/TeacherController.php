<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eclass;
use App\User;
use Session;

class TeacherController extends Controller
{
    public function index()
    {
        $user = User::find(Session::get('id'));
        return view('teachers.classes.index',compact('user'));
    }
}

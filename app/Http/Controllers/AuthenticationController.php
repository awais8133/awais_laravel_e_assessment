<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\User;
use Session;

class AuthenticationController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function loginUser(Request $request)
    {
        $data = request()->validate([
            'email' => 'required',
            'password' => 'required|min:8',
            ]);
        $user = User::where(['email'=>$request->email,'password'=>$request->password])->first();

        Session::put('id',$user->id);
        Session::put('name',$user->name);
        Session::put('image',$user->image);

        if($user){
            if($user->type==1)
                return redirect(route('teachers.classes.index'));
            else
                return 'student view';
        }else{
            return redirect(route('auth.login'));
        }
    }


    public function create()
    {
        return view('auth.sign-up');
    }

    public function store(Request $request)
    {

        $data = request()->validate([
            'name' => 'required|min:6|max:60',
            'email' => 'required',
            'password' => 'required|min:8',
            'type' => 'required',
            'image' =>'required|file|image|max:5000'
            ]);
            


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->type = $request->type;
        $user->image = $request->image->store('uploads','public');
        $user->save();


        // $this->storeImage($user);

        return redirect(route('auth.login'));

    }

    private function storeImage($user)
    {
        if(request()->has('image')){
            $user->update([
                'image' => request()->image->store('uploads','public'),
            ]);
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect(route('auth.login'));
    }
}

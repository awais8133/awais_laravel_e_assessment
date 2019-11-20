<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eclass;
use App\Subjects;
use App\Category;
class CategoryController extends Controller
{
    
    public function index($id)
    {
       
        $eclass=Eclass::where('id',$id)->get();
        $subjects=Subjects::where('id',$eclass->first()->sub_id)->get();
        // dd($subjects);
        // dd($subjects->first()->name);
        $categories=Category::where('sub_id',$subjects->first()->id)->get();
        // dd($category);
        // $subjects=Subjects::find('') 

        // dd($subjects->first()->id);

        // $subjects2=Subjects::find($subjects->first()->id);
        // dd($subjects2);
        return view('teachers.categories.index-categories',\compact('categories','id'));
    }

    public function  addcategory($id)
    {
        return view('teachers.categories.add-category',\compact('id'));
    }
   
    public function  storecategory(Request $request,$id)
    {
        $eclass=Eclass::where('id',$id)->get();
       
        $subects=Subjects::where('id',$eclass->first()->sub_id)->get();
        //dd($subects->first()->name); 

        $data = request()->validate([
            'name' => 'required|min:5|max:60',
             
            ]);
        if($subects){

            $category=new Category;
            $category->name =$request->input('name');
            $category->sub_id =$eclass->first()->sub_id;
            $category->save();
                
            return view('teachers.classes.openclass',compact('id'));
        }
       // return view('teachers.categories.index-categories',\compact('id'));
    }
   
}

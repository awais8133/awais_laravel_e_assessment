@extends('layout')

@section('title','Maintain Questions')

@section('hero-section')
<div class="container">
  <h1 class="hero-title">Maintain Questions</h1>
</div>
<div class="hero-img">
  <img src="{{asset('images/question1.jpg')}}" alt="class">
</div>
@endsection


@section('content')

<div class="row mb-4">
    <div class="col-2 ">
        <a href="#" class="btn btn-primary btn-lg">Add Question</a>
    </div>
    <div class="col-5 offset-5">
        <form method="post" action="#">
            <input name="_token" type="hidden" value="{{ csrf_token() }}" />
            <div class="row">
                <div class="col-9">
                    <div class="form-group">
                        <input type="search" name="search" class="form-control" placeholder="Search...">
                    </div>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-primary btn-block">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>


<table class="table"> 
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Category Name</th>
            <th scope="col">Question</th>
            <th scope="col">Complexity</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th class="c1" >1</th>
            <td class="c2">Introduction To Programming</td>
            <td class="c3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, maxime?</td>
            <td class="c4">0.2</td>
            <td class="c5 text-right">
                <a href="#" class="btn btn-outline-dark">Update</a>
                <a href="#" class="btn btn-outline-danger">Delete</a>
            </td>
        </tr>    
        <tr>
            <th class="c1" >1</th>
            <td class="c2">Introduction To Programming</td>
            <td class="c3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, maxime?</td>
            <td class="c4">0.2</td>
            <td class="c5 text-right">
                <a href="#" class="btn btn-outline-dark">Update</a>
                <a href="#" class="btn btn-outline-danger">Delete</a>
            </td>
        </tr>    
        <tr>
            <th class="c1" >1</th>
            <td class="c2">Introduction To Programming</td>
            <td class="c3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, maxime?</td>
            <td class="c4">0.2</td>
            <td class="c5 text-right">
                <a href="#" class="btn btn-outline-dark">Update</a>
                <a href="#" class="btn btn-outline-danger">Delete</a>
            </td>
        </tr>    
        <tr>
            <th class="c1" >1</th>
            <td class="c2">Introduction To Programming</td>
            <td class="c3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, maxime?</td>
            <td class="c4">0.2</td>
            <td class="c5 text-right">
                <a href="#" class="btn btn-outline-dark">Update</a>
                <a href="#" class="btn btn-outline-danger">Delete</a>
            </td>
        </tr>    
        <tr>
            <th class="c1" >1</th>
            <td class="c2">Introduction To Programming</td>
            <td class="c3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, maxime?</td>
            <td class="c4">0.2</td>
            <td class="c5 text-right">
                <a href="#" class="btn btn-outline-dark">Update</a>
                <a href="#" class="btn btn-outline-danger">Delete</a>
            </td>
        </tr>    
    </tbody>
</table>


@endsection
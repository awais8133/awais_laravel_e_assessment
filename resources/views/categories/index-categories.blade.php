@extends('layout')

@section('title','Maintain Categories')


@section('hero-section')
<div class="container">
  <h1 class="hero-title">Maintain Categories</h1>
</div>
<div class="hero-img">
  <img src="{{asset('images/category.jpg')}}" alt="class">
</div>
@endsection


@section('content')

<div class="row mb-4">
    <div class="col text-right">
        <a href="#" class="btn btn-primary btn-lg">Add Category</a>
    </div>
</div>


<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col"></th> 
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Introduction To Programming</td>
            <td class="text-right">
                <a href="#" class="btn btn-outline-dark">Update</a>    
                <a href="#" class="btn btn-outline-danger">Delete</a>    
            </td>
        </tr> 
        <tr>
            <th scope="row">1</th>
            <td>Introduction To Programming</td>
            <td class="text-right">
                <a href="#" class="btn btn-outline-dark">Update</a>    
                <a href="#" class="btn btn-outline-danger">Delete</a>    
            </td>
        </tr> 
        <tr>
            <th scope="row">1</th>
            <td>Introduction To Programming</td>
            <td class="text-right">
                <a href="#" class="btn btn-outline-dark">Update</a>    
                <a href="#" class="btn btn-outline-danger">Delete</a>    
            </td>
        </tr> 
        <tr>
            <th scope="row">1</th>
            <td>Introduction To Programming</td>
            <td class="text-right">
                <a href="#" class="btn btn-outline-dark">Update</a>    
                <a href="#" class="btn btn-outline-danger">Delete</a>    
            </td>
        </tr> 
    </tbody>
</table>

@endsection
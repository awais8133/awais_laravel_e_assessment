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
        <a href=  '{{ url("/teachers.categories/add-category/{$id}")}}' class="btn btn-primary btn-lg">Add Category</a>
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

    @foreach ($categories as $category)
        
        <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->name}}</td>
            <td class="text-right">
                <a href="#" class="btn btn-outline-dark">Update</a>    
                <a href="#" class="btn btn-outline-danger">Delete</a>    
            </td>
        </tr> 
       @endforeach
        
         
    </tbody>
</table>

@endsection
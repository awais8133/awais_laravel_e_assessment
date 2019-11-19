@extends('layout')

@section('title','Add Subject')

@section('hero-section')
<div class="container">
  <h1 class="hero-title">Add Subject</h1>
</div>
<div class="hero-img">
  <img src="{{asset('images/pile-of-five-books-51342.jpg')}}" alt="class">
</div>
@endsection

@section('content')

<form method="post" action="#">
    <input name="_token" type="hidden" value="{{ csrf_token() }}" />    
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
    </div>  
    <button type="submit" class="btn btn-primary">Save</button>
</form>


@endsection
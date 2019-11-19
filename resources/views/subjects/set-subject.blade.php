@extends('layout')

@section('title','Set Subject')


@section('hero-section')
<div class="container">
  <h1 class="hero-title">Set Subject</h1>
</div>
<div class="hero-img">
  <img src="{{asset('images/book1.jpg')}}" alt="class">
</div>
@endsection


@section('content')


<form method="post" action="#">
    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
    <div class="form-group">
        <label for="exampleFormControlSelect1">Select subject name</label>
        <select class="form-control">
            <option>CS-101</option>
            <option>CS-102</option>
            <option>CS-103</option>
            <option>CS-201</option>
            <option>CS-203</option>
            <option>CS-401</option>
            <option>CS-420</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>

<div class="text-right mt-5">
    <hr>
    <a href="#" class="btn btn-primary">Add Subject</a>
</div>




@endsection
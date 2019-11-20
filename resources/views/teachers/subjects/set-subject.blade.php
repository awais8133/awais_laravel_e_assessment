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


<form method="post" action="{{url('/teachers/subjects/set-subject',($id))}}">
    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
    <div class="form-group">
        <label for="exampleFormControlSelect1">Select subject name</label>
       
        <select class="form-control" name="subject">
        @foreach ($subject as $subject)
            <option value="{{$subject->id}}" >{{$subject->name}}</option>
            @endforeach
        </select>
       
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>

<div class="text-right mt-5">
    <hr>
    <a href="#" class="btn btn-primary">Add Subject</a>
</div>




@endsection
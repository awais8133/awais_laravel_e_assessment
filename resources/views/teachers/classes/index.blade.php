@extends('index-layout')

@section('title','Index')

@section('hero-section')
<div class="container">
  <h1 class="hero-title">Classes</h1>
</div>
<div class="hero-img">
  <img src="{{asset('images/classroom1.jpg')}}" alt="class">
</div>
@endsection

@section('content')

<div class="row">

  @foreach ($user->eclasses as $class)


  <div class="col-md-4 mb-3">
    <div class="card">
      <div class="card-body">
        <strong>Class</strong>
        <h5 class="card-title">{{$class->name}}</h5>

        <strong>Section</strong>
        <p class="card-text">{{$class->section}}</p>

        <strong>Class Code</strong>
        <p class="card-text">{{$class->code}}</p>
        <a href=  '{{ url("/teachers/classes/openclass/{$class->id}") }}' class="btn btn-primary">Open</a>
      </div>
    </div>
  </div>

  @endforeach

</div>
@endsection
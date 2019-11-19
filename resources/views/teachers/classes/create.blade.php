@extends('index-layout')

@section('title','Create Class')


@section('hero-section')
<div class="container">
    <h1 class="hero-title">Create Class</h1>
</div>
<div class="hero-img">
    <img src="{{asset('images/crete-class.jpg')}}" alt="class">
</div>
@endsection


@section('content')
<form method="post" action="{{route('teachers.classes.store')}}">
    <div class="row">

        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <div class="col-md-4">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>
        </div>
        <div class="col-md-4">

            <div class="form-group">
                <label>Section</label>
                <input type="text" name="section" class="form-control">
            </div>
        </div>
        <div class="col-md-4">

            <div class="form-group">
                <label>Code</label>
                <input type="text" name="code" class="form-control">
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col">
            <div class="text-right">
                <button type="reset" class="btn btn-danger">Cancel</button>
                <button type="submit" class="btn btn-primary">Create Class</button>
            </div>
        </div>
    </div>


</form>
@endsection
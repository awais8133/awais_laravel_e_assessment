@extends('layout')

@section('title','Quiz Metadata')

@section('hero-section')
<div class="container">
  <h1 class="hero-title">Quiz Metadata</h1>
</div>
<div class="hero-img">
  <img src="{{asset('images/test.jpg')}}" alt="class">
</div>
@endsection


@section('content')



<form method="post" action="#">
    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>No. of Questions</label>
                <input type="number" name="noOfQuestions" class="form-control">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Conducting Time</label>
                <input type="datetime-local" name="conductingTime" class="form-control">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Time Duration</label>
                <input type="number" name="duration" step="5" class="form-control">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label>Select Categories</label>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="category" value="true">
                <label class="form-check-label">Category 1</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="category" value="true">
                <label class="form-check-label">Category 2</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="category" value="true">
                <label class="form-check-label">Category 3</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="category" value="true">
                <label class="form-check-label">Category 4</label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col text-right">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>



@endsection
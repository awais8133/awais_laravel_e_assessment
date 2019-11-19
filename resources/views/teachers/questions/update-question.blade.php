@extends('layout')

@section('title','Update Questions')

@section('hero-section')
<div class="container">
  <h1 class="hero-title">Update Question</h1>
</div>
<div class="hero-img">
  <img src="{{asset('images/update-question.jpg')}}" alt="update-question">
</div>
@endsection

@section('content')



<form method="post" action="#">
    <input name="_token" type="hidden" value="{{ csrf_token() }}" />

    <div class="form-group">
        <label>Question</label>
        <textarea class="form-control" name="question" rows="3"></textarea>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Option 1 </label>
                <input type="text" name="option1" class="form-control">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Option 2 </label>
                <input type="text" name="option2" class="form-control">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Option 3</label>
                <input type="text" name="option3" class="form-control">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Option 4</label>
                <input type="text" name="option4" class="form-control">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Correct Answer</label>
                <select class="custom-select" name="">
                    <option>Text</option>
                    <option>Text</option>
                    <option>Text</option>
                </select>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Complexity</label>
                <select class="custom-select" name="">
                    <option>Text</option>
                    <option>Text</option>
                    <option>Text</option>
                </select>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Category</label>
                <select class="custom-select" name="">
                    <option>Text</option>
                    <option>Text</option>
                    <option>Text</option>
                </select>
            </div>
        </div>
    </div>
 
    <div class="row">
        <div class="col">
            <button class="btn btn-primary">Add Option</button>
        </div>
        <div class="col text-right">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>



@endsection
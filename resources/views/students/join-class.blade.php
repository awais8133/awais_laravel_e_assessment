@extends('index-layout')

@section('title','Join Class')


@section('hero-section')
<div class="container">
    <h1 class="hero-title">Join Class</h1>
</div>
<div class="hero-img">
    <img src="{{asset('images/classroom.jpg')}}" alt="class">
</div>
@endsection

@section('content')

<div class="row">
    <div class="col">
        <form method="post" action="#">
            <input name="_token" type="hidden" value="{{ csrf_token() }}" />
            <div class="form-group">
                <label>Code</label>
                <input type="text" name="code" class="form-control" autocomplete="off" />
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-danger">Cancel</button>
                <button type="submit" class="btn btn-primary">Join</button>
            </div>
        </form>
    </div>
</div>


@endsection
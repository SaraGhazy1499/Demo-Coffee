@extends('template.head')
@section('title')
Edit Course
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('course/index.css') }}" />
@endsection
@extends('layouts.app')

@section('_content')

<div class="container">
    <!-- edit form column -->
    <div class="col-lg-12 text-lg-center mt-5">
        <h1>Edit Your Course</h1>
        <br>
        <br>
    </div>
    <div class="col-lg-8 push-lg-4 container">
         <form method="post" action="{{route("courses.update",$data)}}">
             @method("PUT")
             @csrf
            <div class="form-group row mt-5">
                <label class="col-lg-3 col-form-label form-control-label">Name</label>
                <div class="col-lg-9">
                    <input class="form-control" type="text" value="{{$data['name']}}" name="name" />
                </div>
            </div>
            <div class="form-group row mt-5">
                <label class="col-lg-3 col-form-label form-control-label">Description</label>
                <div class="col-lg-9">
                    <textarea class="form-control" type="text" value="{{$data['desc']}}" name="desc">{{$data['desc']}}</textarea>
                </div>
            </div>
            <div class="form-group row mt-5">
                <label class="col-lg-3 col-form-label form-control-label">Duration</label>
                <div class="col-lg-9">
                    <input class="form-control" type="number" value="{{$data['duration']}}"  name="duration"/>
                </div>
            </div>

            <div class="form-group row mt-5 mb-3">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <div class="col-lg-9">
                    <input type="reset" class="btn btn-secondary" value="Cancel" />
                    <input type="submit" class="btn btn-primary" value="Save Changes" />
                </div>
            </div>
        </form>
    </div>
</div>


@endsection

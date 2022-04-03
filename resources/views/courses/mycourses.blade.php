@extends('template.head')
@section('title')
My Courses
@endsection
@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('course/index.css') }}" />
@endsection


@section('_content')

<div class="row">
    <div class="col-3 offset-9 mt-5">
<a href="/courses/create" class=" btnadd btn-success">Add Course</a>
    </div>
</div>

<div class="container mx-auto mt-4">
    <h1 class="mt-2 mb-5" style="color:rgba(0, 0, 0, 0.2);">My Courses</h1>
    <div class="row">
     @foreach ($mycourses as $course)
    <div class="col-md-4 ">
  <div class="card" style="width: 20rem;">
    <img src="{{asset('images/'.$course['img'])}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title">{{$course['name']}}</h4>
          <h6 class="card-subtitle mb-2 ">{{$course['duration']}} Hr </h6>
      <p class="card-text">{{$course['desc']}}</p>
      <div class="row">
          <div class="col ">
      <a href="{{route('courses.edit',$course['id'])}}" class="btn mr-2"><i class="fas fa-link"></i> Edit</a>
          </div>
          <div class="col">
      <form method="POST" action={{route('courses.destroy',$course)}}>
        @method("DELETE")
        @csrf
      <input type="submit" class="btn " value="Delete"/><i class="fab fa-github"></i>
      </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    @endforeach

  </div>
    </div>

@endsection

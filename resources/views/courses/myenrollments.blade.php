@extends('template.head')
@section('title')
My Enrollments
@endsection
@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('course/index.css') }}" />
@endsection

@section('_content')

<div class="container mx-auto mt-4">
    <h1 class="mt-2 mb-5" style="color:rgba(0, 0, 0, 0.2);">My Enrollment</h1>
    <div class="row">
     @foreach ($courses as $course)
    <div class="col-md-4 ">
  <div class="card" style="width: 20rem;">
    <img src="{{asset('images/'.$course['img'])}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h1 class="card-title">{{$course['name']}}</h1>
          <h4 class="card-subtitle mb-2  ">{{$course['duration']}} Hr </h4>
      <p class="card-text">{{$course['desc']}}</p>
      <div class="row">
          <div class="col">
      <a href="{{route('courses.show',$course['id'])}}" class="btn mr-2"><i class="fas fa-link"></i>Take a View</a>
          </div>
          <div class="col">

            <form method="POST" action="{{route('students.destroy',$course['id'])}}">
                @method('DELETE')
                @csrf
                <input type="hidden" value="{{Auth::user()->id}}" name="user_id"/>
             <input type="submit" class="btn mr-2" value="Un Enroll"><i class="fas fa-link"></i>
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


@extends('template.head')
@section('title')
Show Course
@endsection

@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('course/show.css') }}" />
@endsection



@section('_content')

<div class="container mt-5 mb-5">

    <div class="d-flex justify-content-center row">

    <div class="card-header col-md-10"><h2>Course Details</h2></div>

        <div class="col-md-10">
            <div class="row p-2 bg-white border rounded">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="{{asset('images/'.$course['img'])}}"></div>
                <div class="col-md-6 mt-1 mx-5">
                    <h4>{{$course['name']}}</h4>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>{{$course['duration']}} Hr</span>
                    </div>
                    <p class="text-justify text-truncate para mb-0"><br>{{$course['desc']}}<br></p>
                </div>

            </div>

        </div>
    </div>
</div>


 <div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
                <div class="col-md-10 ">
                    <div class="card">
                    <div class="card-header"><h2>Course Reviews</h2></div>
                    @if(Auth::user()&&Auth::user()->role=='student')
                  <div class="card-body">
                    <form method="POST" action="{{route('comments.store')}}">
                        @csrf
                        <input type="hidden"  name="course_id" value="{{$course['id']}}"/>
                        <textarea class="form-control" name="body"></textarea>
                        <div class="text-danger">{{$errors->first('body')}}</div>
                        <input type="submit" class="btn btn-warning mt-2" value="Add comment"/>
                    </form>
              </div>
              @endif
              <div class="row mb-2 mx-2 mt-2">
               @include('courses.comments',['comments'=>$course->comments])

              </div>


            </div>

        </div>

    </div>
</div>


@endsection

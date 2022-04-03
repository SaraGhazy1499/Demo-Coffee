@extends('template.head')
@section('title')
Add Courses
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('course/create.css') }}" />
@endsection
@extends('layouts.app')


@section('_content')

<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <div class="booking-bg">
                        <div class="form-header">
                            <h2>Add Your Course</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam optio pariatur rem quia accusamus totam, ab ut accusantium animi blanditiis magni iusto dicta, recusandae nulla tempora ducimus nemo! Sit, asperiores!
                            </p>
                        </div>
                    </div>
                    <form method="POST" action="/courses" enctype="multipart/form-data">
                        @method('post')
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <span class="form-label">Name</span>
                                    <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                                    <div class="text-danger">{{$errors->first('name')}}</div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <span class="form-label">Description</span>
                                    <textarea class="form-control" type="text" name="desc" value="{{ old('desc') }}"></textarea>
                                    <div class="text-danger">{{$errors->first('desc')}}</div>

                                </div>
                            </div>

                        </div>
                        <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <span class="form-label">Duration</span>
                                        <input class="form-control" type="number" min="1" name="duration" value="{{ old('duration') }}">
                                        <div class="text-danger">{{$errors->first('duration')}}</div>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="form-label">Picture</span>
                            <input class="form-control" type="file" name="img">
                            <div class="text-danger">{{$errors->first('img')}}</div>
                        </div>
                        <div class="form-btn">
                            <input type="submit" class="submit-btn" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection










@extends('template.head')
@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('course/show.css') }}" />
@endsection



@section('_content')

<div class="container mt-5 mb-5">

    <div class="d-flex justify-content-center row">

    <div class="card-header col-md-10">

        <h2>Edit Profile</h2>

    </div>

        <div class="col-md-10">
            <div class="row p-2 bg-white border rounded">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="{{asset('images/'.$data->img)}}"></div>
                <div class="col-md-6 mt-1 mx-5">
                    <div class="row mt-3">
                        <form method="POST" action="{{route("users.update",$data['id'])}}">
                            @method('PUT')
                            @csrf
                        <div class="col">
                            Name: <input type="text" name="name" value="{{$data['name']}}"/>
                        </div>
                        <input type="hidden" name="email" value="{{$data['email']}}" />
                        <input type="hidden" name="role" value="{{$data['role']}}" />
                        <div class="col m-5">
                            <input type="submit" hef="#" class="btn btn-success" value="save">
                        </div>
                    </form>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

@endsection

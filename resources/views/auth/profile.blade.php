@extends('template.head')
@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('course/show.css') }}" />
@endsection



@section('_content')

<div class="container mt-5 mb-5">

    <div class="d-flex justify-content-center row">

    <div class="card-header col-md-10">
        <div class="row">
            <div class="col">
        <h2>My Profile</h2>
            </div>

            <div class="col offset-8 ">
                <form method="POST" action="{{route('users.destroy',$data->id)}}">
                    @method('DELETE')
                    @csrf
                    <input type="submit" class="btn btn-warning" value="Delete"/>
                </form>
            </div>
        </div>
    </div>

        <div class="col-md-10">
            <div class="row p-2 bg-white border rounded">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="{{asset('images/'.$data->img)}}"></div>
                <div class="col-md-6 mt-1 mx-5">
                    <div class="row">
                        <div class="col">
                    <h4>{{$data->name}}</h4>
                        </div>

                        <div class="col">
                         <a href="{{route('users.edit',$data->id)}}" class="btn btn-success" >Edit</a>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>{{$data->role}}</span>
                    </div>
                    <p class="text-justify text-truncate para mb-0"><br>{{$data->email}}<br></p>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection

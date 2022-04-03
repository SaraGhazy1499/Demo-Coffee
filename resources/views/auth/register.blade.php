@extends('template.head')
@section('styles')
<link rel="stylesheet" href="{{ asset('auth/register.css') }}" />
<link rel="stylesheet" href="{{ asset('course/index.css') }}" />
@endsection
@extends('layouts.app')



@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins ">
            <div class="wrapper wrapper--w680 ">
                <div class="card card-4">
                    <div class="card-body">
                        <h2 class="title text-white">Registration Form</h2>
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md ">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>

                            <div class="col-md ">
                                <div class="row">
                                    <div class="col-6">
                                       Teacher
                                     <input id="teacher" type="radio" class="radio-container"  name="role" value="teacher" >
                                    </div>

                                    <div class="col-6">
                                        Student
                                <input id="student" type="radio" class="radio-container" name="role" value="student"  >
                                    </div>
                                </div>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="img" class="col-md-4 col-form-label text-md-end">{{ __('img') }}</label>

                            <div class="col-md">
                                <input id="img" type="file" class="form-control @error('img') is-invalid @enderror" name="img" >

                                @error('img')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md offset-md-4">
                                <input type="submit" class="btn btn-primary" value="{{ __('Register') }}">


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection

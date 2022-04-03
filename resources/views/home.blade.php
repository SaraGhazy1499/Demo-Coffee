@extends('template.head')
@section('styles')
<link rel="stylesheet" href="{{ asset('auth/register.css') }}" />
<link rel="stylesheet" href="{{ asset('course/index.css') }}" />
@endsection
@extends('layouts.app')
@section('content')
<!------------start slider-------------->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('images/1.jpeg')}}" class="d-block w-100 h-75" alt="...">

      </div>
      <div class="carousel-item">
        <img src="{{asset('images/5.png')}}" class="d-block w-100 h-75" alt="...">

      </div>
      <div class="carousel-item">
        <img src="{{asset('images/2.jpg')}}" class="d-block w-100 h-75" alt="...">

      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


<!----------------end slider-------------------->


<!------------start about---------------->
<div class="container about us mt-5 mb-3">

    <div class="row" id="about">
        <div class="col">
            <img src="{{asset('images/4.webp')}}"/>
        </div>
        <div class="col-4 mx-2">
            <h1 >About Us</h1>
            <p class="mt-4" style="line-height:40px">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia dignissimos illo non nisi alias, minus iusto cum molestias incidunt vero
                 nostrum optio veritatis harum, cupiditate sit temporibus maxime suscipit neque?
            </p>
        </div>
    </div>

</div>


<!-----------------end about---------------------->

<div class="container course mt-5">
    <h1 class="text-center">The world`s largest selection of courses</h1>
    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, maiores. Eos deleniti, architecto mollitia ducimus tenetur ex, porro adipisci rerum
        dolorum repudiandae fuga sequi ullam consequuntur optio placeat excepturi quam?</p>
    <div class="row">
        <div class="col">
    <div class="card mt-5" style="width: 18rem;">
        <img src="{{asset('images/1.jpeg')}}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h2 class="card-title">Card title</h2>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

        </div>
      </div>
    </div>


    <div class="col">
      <div class="card mt-5 " style="width: 18rem;">
        <img src="{{asset('images/4.jpeg')}}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h2 class="card-title">Card title</h2>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

        </div>
      </div>
    </div>


    <div class="col">
      <div class="card mt-5 " style="width: 18rem;">
        <img src="{{asset('images/3.jpeg')}}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h2 class="card-title">Card title</h2>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

        </div>
      </div>
    </div>
</div>




<!----start contact--------------->
<div class="container about us mt-5 mb-3">

    <div class="row">

        <div class="col-4">
            <h1 id="contactus">Contact Us</h1>
            <p class="mt-4" style="line-height:40px">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia dignissimos illo non nisi alias, minus iusto cum molestias incidunt vero
                 nostrum optio veritatis harum, cupiditate sit temporibus maxime suscipit neque?
            </p>
        </div>

        <div class="col mx-5">
            <img src="{{asset('images/contactus.jpeg')}}" class="w-100"/>
        </div>
    </div>

</div>


<!-----------end contact-------------->

@endsection



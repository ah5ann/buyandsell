@extends('layouts.app')
@section('mytitle', 'Home')
@section('content')

<div class="row">
    <div class="col-md-12">
        <nav class="container navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('accessories')}}">Accessories <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('laptops')}}">Laptops</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('screens')}}">Screens</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('mobiles')}}">Mobiles</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="https://cdn.mos.cms.futurecdn.net/vEcELHdn998wRTcCzqV5m9-970-80.jpg.webp" alt="First Slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://cdn.mos.cms.futurecdn.net/X5TyA8uvkGXoNyjFzxcowS-970-80.jpg.webp" alt="second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://cdn.mos.cms.futurecdn.net/6t8Zh249QiFmVnkQdCCtHK-970-80.jpg.webp" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    

    <div class="row" style="padding-left:10px;padding-right:10px;">
        <div class="col-md-12"><h3>Categories</h3></div>
        <div class="col-sm-3" style="padding:5px">
            <div class="card" >
                <img class="card-img-top" src="https://cdn.mos.cms.futurecdn.net/HGtimMvYwhLXn4EixJKTfS-970-80.jpg.webp" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Laptops</h5>
                    <p class="card-text">Find out high quality laptops available online</p>
                    <a href="{{route('laptops')}}" class="btn btn-primary btn-block">View</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3" style="padding:5px">
            <div class="card" >
                <img class="card-img-top" src="https://cdn.mos.cms.futurecdn.net/HGtimMvYwhLXn4EixJKTfS-970-80.jpg.webp" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Accessories</h5>
                    <p class="card-text">Find out high quality laptops available online</p>
                    <a href="{{route('accessories')}}" class="btn btn-primary btn-block">View</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3" style="padding:5px">
            <div class="card" >
                <img class="card-img-top" src="https://cdn.mos.cms.futurecdn.net/HGtimMvYwhLXn4EixJKTfS-970-80.jpg.webp" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Screens</h5>
                    <p class="card-text">Find out high quality laptops available online</p>
                    <a href="{{route('screens')}}" class="btn btn-primary btn-block">View</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3" style="padding:5px">
            <div class="card" >
                <img class="card-img-top" src="https://cdn.mos.cms.futurecdn.net/HGtimMvYwhLXn4EixJKTfS-970-80.jpg.webp" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Mobiles</h5>
                    <p class="card-text">Find out high quality laptops available online</p>
                    <a href="{{route('mobiles')}}" class="btn btn-primary btn-block">View</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
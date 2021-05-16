@extends('layouts.app')
@section('mytitle', $title)
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
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('home')}}">Home </a>
                    </li>
                    <li class="nav-item active">
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
        <div class="col-sm-12 col-md-12 col-lg-12">
            <table style="width:100%">
                <tr>
                    <td>
                        <a href="" class="btn btn-link">Back to Search Results</a>
                    </td>
                    <td>
                        Category: Laptops
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-5 col-lg-5">
            <img style="width:100%" src="{{url('public/uploads/'.$product->image)}}">
        </div>
        <div class="col-sm-12 col-md-7 col-lg-7">
            <h3>{{$product->title}}</h3>
            <p>
            {{$product->description}} </p>   
            <b>Price: </b> $ {{$product->price}}.00 
            <div class="row">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">
                            <h6><b>Seller Information</b></h6>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <td>Seller's Name</td>
                                    <td>{{$product->user->name}}</td>
                                </tr>
                                <tr>
                                    <td>From</td>
                                    <td>Oklahoma, United States</td>
                                </tr>
                                <tr>
                                    <td>Ad Posted on</td>
                                    <td>{{$product->created_at}}</td>
                                </tr>
                                <tr>
                                    <td>Expiry on</td>
                                    <td>June 01, 2021</td>
                                </tr>
                                
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="" class="btn btn-success btn-block"><i class="fa fa-envelope"></i> Message Seller </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <b>Action</b>
                        </div>
                        <div class="card-body">
                            <a href="" class="btn btn-danger btn-block"> BUY NOW</a>
                            <hr>
                            <a href="" class="btn btn-primary btn-block"> MAKE OFFER</a>
                            <hr>
                            <a href="" class="btn btn-warning btn-block"> ADD TO FAVORITE</a>
                            <hr>
                            <a href="" class="btn btn-primary btn-block bg-dark"><i class="fa fa-shopping-cart"></i> ADD TO CART</a>
                            <hr style="margin-bottom:0px imp !important">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
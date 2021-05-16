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
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('accessories')}}">Accessories</a>
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
        <div class="col-sm-12 col-md-3 col-lg-3" >
            <h5 style="padding-top:10px; margin-top:20px;"> My Profile</h5>
            <hr>
            <div style="border-right:1px solid #ccc; padding-right:10px">
                <table class="table table-hover ">
                    <tr>
                        <td><a href="">My Ads</a></td>
                    </tr>
                    <tr>
                        <td><a href="">My Sales</a></td>
                    </tr>
                    <tr>
                        <td><a href="">My Purchases</a></td>
                    </tr>
                    <tr>
                        <td><a href="">My Settings</a></td>
                    </tr>
                    <tr>
                        <td><form action="{{route('logout')}}" method="post">@csrf <button type="submit" class="btn btn-link"><i class="fa fa-sign-out"></i> Logout</button></form></td>
                    </tr>
                    <tr>
                        <td><a href="{{route('addproduct')}}" class="btn btn-success btn-block">+ Create an Ad</a></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-sm-9" style="">
            <h5 style="padding-top:10px; margin-top:20px;"> My Ads</h5>
            <hr>
            @foreach ($products as $product)
                <div class="row" style="margin-bottom:10px; padding-bottom:10px;box-shadow:5px 5px 5px #ccc">

                    <div class="col-sm-4">
                        <img src="{{url('uploads/'.$product->image)}}" style="width:100%">
                        
                        <hr>
                        <?php 
                            $today = new DateTime(date('Y-m-d'));
                            $interval = $today->diff($product->created_at);
                            $diff=$interval->days;
                        ?>
                        
                    </div>
                    <div class="col-sm-8">
                        <strong>{{$product->title}}</strong>
                        <div class="col-sm-12">
                            <p>{{$product->description}}</p>
                        </div>
                        <hr>
                        Ad Type : <b> To {{$product->type}}</b>
                        <hr>
                        Price: $ {{$product->price}}.00
                        <hr>
                        Duration Left: <span style="color:red">{{30-($diff)}}</span> days
                        <hr>
                        <form action="{{route('product.destroy', $product->id)}}" method="post">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
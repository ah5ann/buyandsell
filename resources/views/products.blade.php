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
            <h5 style="padding-top:10px; margin-top:20px;"> Search Products</h5>
            <hr>
            <form action="{{route('search')}}" method="get">
            @csrf
            <div style="border-right:1px solid #ccc; padding-right:10px">
                <div class="form-group">
                    <h6>Price</h6>
                    <hr>
                    <label>From</label>
                    <input type="number" min="0" class="form-control" placeholder="0" name="pfrom">
                    <label>To</label>
                    <input type="number" min="0" class="form-control" placeholder="0" name="pto">
                </div>
                <div class="form-group">
                    <h6>Sort</h6>
                    <hr>
                    <select class="form-control" name="sortp">
                        <option value="1">Hight to Low</option>
                        <option value="2">Low to High</option>
                    </select>
                </div>
                <div class="form-group">
                    <h6>Location</h6>
                    <hr>
                    <select class="form-control" name="state">
                        <option value="1">Select State</option>
                    </select>
                    <select class="form-control" name="city">
                        <option value="1">Select City</option>
                    </select>
                </div>
                <div class="form-group">
                    <h6 style="margin-top:10px">Post Duration</h6>
                    <hr>
                    <select class="form-control" name="duration">
                        <option value="1">Newly Posted</option>
                        <option value="2">Ending Soon</option>
                    </select>
                </div>
                <div class="form-group" >
                    <button type="submit" class="btn btn-block btn-primary bg-dark"> Submit </button>
                </div>
                </form>
            </div>
        </div>
        <div class="col-sm-9">
            <h5 style="padding-top:10px; margin-top:20px;"> {{$title}}</h5>
            <hr>
            <?php if(count($products)>0){?>
            <?php foreach($products as $product){?>
                <div class="row" style="padding-bottom:10px">

                    <div class="col-sm-4">
                        <img src="{{url('public/uploads/'.$product->image)}}" style="width:100%">
                        <hr>
                        <?php 
                            $today = new DateTime(date('Y-m-d'));
                            $interval = $today->diff($product->created_at);
                            $diff=$interval->days;
                        ?>
                        <a href="{{URL::to('/product/'.$product->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa fa-shopping-cart"></i> ADD TO CART</a>
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
                    </div>
                </div>
            <?php }
            }else{?>
                <div class="row" style="padding-bottom:10px">
                    <div class="alert alert-danger">No products are currently listed in this category</div>
                </div>

            <?php }?>
        </div>
    </div>
</div>
@endsection
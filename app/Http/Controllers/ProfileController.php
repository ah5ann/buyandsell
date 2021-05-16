<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Products;
use App\Categories;
use App\User;
class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = User::find(Auth::user()->id)->products;
        // dd($products);
        return view('profile', ['title'=> 'My Profile', 'products'=>$products]);
    }

    public function new_ad()
    {
        $categories= Categories::all();
        return view('newad', ['title'=> 'Create an Ad', 'categories'=>$categories]);
    }
}

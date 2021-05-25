<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Search function
     */

    public function search()
    {
        $params=$_GET;
        if($params['pfrom'])
        {
            if($params['pto'])
            {
                $products=Products::where('price','>',$params['pfrom'])->where('price','<',$params['pto'])
                ->orderBy('price', $params['sortp']?($params['sortp']==1?'desc':'asc'):'desc')
                ->get();
            }
            else
            {
                $products=Products::where('price','>',$params['pfrom'])
                ->orderBy('price', $params['sortp']?($params['sortp']==1?'desc':'asc'):'desc')
                ->get();
            }
        }
        elseif($params['sortp'])
        {
            $products=Products::orderby('price', $params['sortp']==1?'desc':'asc')->get();
        }
        else
        {
            $products=Products::all();
        }
        
        return view('products', ['title' => 'Search Results', 'products'=> $products]);
    }
}
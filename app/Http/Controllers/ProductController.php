<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Auth;
use App\Products;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // print_r($request->all());exit;
        request()->validate([
            'title' => 'required',
            'type' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category' => 'required',
            'image' => 'required'
        ]);
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));

        $product= new Products();
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->type=$request->type;
        $product->category=$request->category;
        $product->user_id=Auth::user()->id;
        $product->image=$image->getFilename().'.'.$extension;
        $product->save();   
        return redirect()->route('profile')
        ->with('success','Ad posted successfully...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Products::find($id);
        return view('p_show', ['title' => $product->title, 'product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Products::find($id);
        $product->delete();
        return redirect()->route('profile');
    }


    public function accessories()
    {
        $products=Products::where('category',1)->get();
        // dd($products);
        return view('products', ['title' => 'Accessories', 'products'=> $products]);
    }
    public function screens()
    {
        $products=Products::where('category',3)->get();
        return view('products', ['title' => 'Screens', 'products'=> $products]);
    }
    public function shop()
    {
        $products=Products::all();
        return view('products', ['title' => 'Shop', 'products'=> $products]);
    }

    public function laptops()
    {
        $products=Products::where('category',2)->get();
        return view('products', ['title' => 'Laptops', 'products'=> $products]);
    }

    public function mobiles()
    {
        $products=Products::where('category',4)->get();
        return view('products', ['title' => 'Mobiles', 'products'=> $products]);
    }
}

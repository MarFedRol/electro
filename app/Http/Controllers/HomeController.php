<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use App\Category;
use Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cats=Category::all();

        return view('home', compact('cats'));
    }


    public function postIndex(ProductRequest $r){
        $r['user_id'] = Auth::user()->id;
        $r['status'] = 'new';
        $r['showhide'] = 1;
        $r['picture'] = '';
        Product::create($r->all());
        return redirect()->back();
    
} 
}

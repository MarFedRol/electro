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
        $pic = \App::make('\App\Libs\Imag')->url($_FILES['picture1']['tmp_name']);
        if($pic){
           $r['picture']=$pic;
       }else{
           $r['picture'] = ''; 
        }
        Product::create($r->all());
        return redirect()->back();
    
} 

    public function postEdit (ProductRequest $r, $id = null){
        $obj = Product::find($id);
        $r['user_id'] = Auth::user()->id;
        $r['status'] = 'new';
        $r['showhide'] = 1;
        $pic = \App::make('\App\Libs\Imag')->url($_FILES['picture1']['tmp_name']);
        if ($pic){
            $p_path = public_path('uploads/'.$obj->user_id.'/'.$obj->picture);
            if (file_exists($p_path)){
                @unlink($p_path);
            }
            $r['picture'] = $pic;
        }else{
            $r['picture'] = '';
        }
        $obj->update($r->all());
        return redirect()->back();
    }
}

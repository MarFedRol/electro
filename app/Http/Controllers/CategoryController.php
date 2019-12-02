<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getIndex($id = null){
    	$obj = Category:find ($id);
    	return view('category', compact('obj'))
    }
}

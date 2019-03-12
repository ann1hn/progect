<?php

namespace App\Http\Controllers;

use App\Product;

class BaseController extends Controller
{
    public function getIndex(){
		$news=Product::orderBy('id', 'DESC')->limit(10)-> get();
		return view('welcome', compact('news'));
	}
}

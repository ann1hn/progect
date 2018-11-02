<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalog;

class ProductController extends Controller
{
    public function getCatalog($id=null) {
		$cat=Catalog::find($id);
		return view('products', compact('cat'));
	}
}

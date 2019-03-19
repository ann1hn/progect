<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalog;
use App\Product;

class ProductController extends Controller
{
    public function getCatalog($id=null) {
		$cat=Catalog::find($id);
		$products=Product::where('catalog_id', $cat->name)->get();
		return view('products', compact('cat', 'products'));
	}
}

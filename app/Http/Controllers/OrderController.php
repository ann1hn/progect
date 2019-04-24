<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getAdd($id){
		setcookie($id, '1', time()+3600, '/');
		return redirect()->back();
	}
}

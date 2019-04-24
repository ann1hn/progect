<?php

namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Catalog;
use App\Product;

class SiteComposer {
	public function compose (View $view){
		$v_catalogs=Catalog::all();
		$count=0;
		$arr=[];
		foreach($_COOKIE as $key=>$value){
			$id=(int)$key;
			if($id>0){
			$arr[$id]= Product::find($id);
			$count +=$value;
			}
		}
		$view->with('v_catalogs', $v_catalogs)->with('arr', $arr)->with('count', $count);
	}
}

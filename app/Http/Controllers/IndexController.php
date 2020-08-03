<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Banner;

class IndexController extends Controller
{
    public function index(){

    	// Get all Products
        $productall = Product::all();
        //nRandomOrder()->where('status',1)->where('',1)->paginate(3);
    	/*$productsAll = json_decode(json_encode($productsAll));*/
    	/*dump($productsAll);*/
    	/*echo "<pre>"; print_r($productsAll);die;*/


    	;
    	return view('homeindex')->with(compact('productall'));
    }
}

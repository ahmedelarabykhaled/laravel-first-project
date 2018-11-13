<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\product;

use DB;

class homecontrol extends Controller
{
    public function show()
    {
    	$prods = DB::table('products')->get();

    	return view('welcome',compact('prods'));
    }
    public function addprod()
    {
    	return view('addprod');
    }
    public function add(Request $req)
    {
    	$product = new product;
    	$product->name = $req->name;
    	$product->price = $req->price;
    	$product->category = $req->category;
    	$product->discription = $req->discription;
    	$product->image = $req->image;


    	$product->save();

    	$prods = DB::table('products')->get();

        return view('home',compact('prods'));
    }
    public function delete()
    {
    	return view('confdelete');
    }

    public function confdelete(product $id)
    {
    	$id->delete();
    	
    	$prods = DB::table('products')->get();

        return view('home',compact('prods'));
    }
    public function modify(product $p)
    {
    	return view('modify',compact('p'));
    }
}

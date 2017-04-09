<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Category;
use App\Product;

class MasterController extends Controller
{
    public function index(){
    	$another = DB::table('products')->groupBy('category_id')->orderBy('created_at','desc')->take(3)->get();    	   	

    	$videogames = DB::table('products')->where('category_id','=',3)->orderBy('created_at','desc')->take(3)->get();
    	$musica = DB::table('products')->where('category_id','=',1)->orderBy('created_at','desc')->take(3)->get();
    	$ropas = DB::table('products')->where('category_id','=',4)->orderBy('created_at','desc')->take(3)->get();
    	$pc = DB::table('products')->where('category_id','=',2)->orderBy('created_at','desc')->take(3)->get();
    	$cars = DB::table('products')->where('category_id','=',5)->orderBy('created_at','desc')->take(3)->get();

    	return view('index',['another'=>$another,'videogames'=>$videogames,'musica'=>$musica,'ropas'=>$ropas,'pc'=>$pc,'cars'=>$cars]);
    }
     public function show($id){
     	$product = Product::find($id); 
     	$categoria = DB::table('categories')->where('id','=',$product->category_id)->get();
     	$category = $categoria[0]->name;
	   	return view('producto',['product'=>$product,'category'=>$category]);

    }
    public function contac(){
    	return view('contactanos');
    }
}

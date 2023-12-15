<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $products = DB::table('products')->paginate(5);
        $addons = DB::table('addons')->get();
        return view('product.viewProduct',['data'=>$products,'title'=>$addons]);
    }

    public function addProduct(Request $request){
        $products = [];
        $products['title'] = $request->title;
        $products['description'] = $request->description;
        $products['price']  =$request->price;
        $products['addon_id'] = $request->addon_id;
        if ($request->hasFile('image')) {
            $filename = time().'.'.$request->image->extension();
            $request->image->move(public_path('product'), $filename);
            $products['image']= $filename ;
        }
        $request = DB::table('products')->insert([$products]);
        if ($request) {
            return redirect()->route('viewProduct');
        }

    }

    public function deleteProduct(String $id){
        $products = DB::table('products')->where('id', $id)->delete();
        return redirect()->route('viewProduct');
    }
}

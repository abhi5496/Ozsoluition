<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\Models\Addon;

class AddonController extends Controller
{
    public function index(){
        $addons = DB::table('addons')->paginate(5);
        // $foods = DB::table('food_items')->get();
        return view('addon.viewAddon',['data'=>$addons]);
    }

    public function addAddon(Request $request){
        $addons = [];
        $addons['title'] = $request->title;
        $addons['price']  =$request->price;
        $request = DB::table('addons')->insert([$addons]);
        if ($request) {
            return redirect()->route('viewAddon')->with('success','Addon created successfully.');;
        }

    }

    public function deleteAddon(String $id){
        $addon = DB::table('addons')->where('id', $id)->delete();
        return redirect()->route('viewAddon')->with('success','Addon deleted successfully');
    }
}

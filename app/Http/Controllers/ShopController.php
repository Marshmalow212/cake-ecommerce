<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Slider;

class ShopController extends Controller
{
    public function homepage(){
        $products = Products::all();
        $sliders = Slider::where('is_active','=',1)->limit(4)->get();
        return view('elements.index',['products'=>$products,'sliders'=>$sliders]);
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function HomePage(){
        $products = Products::all();
        $sliders = Slider::all();
        return view('/',compact('products','sliders'));
    }
}

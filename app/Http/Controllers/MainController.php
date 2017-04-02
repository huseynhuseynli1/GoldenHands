<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Partner;

class MainController extends Controller
{
   public function index()
    {
        $partner=Partner::all();		
        $slider=Slider::all();
        return view('Frontend/index',compact('slider','partner'));
    }
}

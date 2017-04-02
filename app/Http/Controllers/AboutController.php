<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;


class AboutController extends Controller
{


  public function index()
    {

        $partner=Partner::all();	

        return view('Frontend/Pages/About',compact('partner'));
    }
}

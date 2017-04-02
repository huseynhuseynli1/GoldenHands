<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
   public function lang($name)
    {
      $lang=['en','az','ru'];
      if (in_array($name,$lang)) {
        Session::put('lang',$name);
        return back();
      }
      else{
      	return view('errors/404');
      }
    }

}

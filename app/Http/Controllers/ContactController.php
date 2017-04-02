<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
     public function index()
    {
        return view('Frontend/Pages/Contact');
    }
}

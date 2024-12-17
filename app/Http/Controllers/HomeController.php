<?php

namespace App\Http\Controllers;

use App\Models\Property_master;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home()
   {
        return view('home')->with(['properties'=> Property_master::all()]);
   }
}

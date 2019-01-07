<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Typeproduct;
class ProductController extends Controller
{
    public function Typeproduct(){
         $typeproduct=Typeproduct::All();
         return view('Homepage',compact('typeproduct'));
    }
}

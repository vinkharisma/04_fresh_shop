<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        $products = Products::all();
        return view('welcome', compact('products'));
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact-us');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function shop()
    {
        return view('shop');
    }
}

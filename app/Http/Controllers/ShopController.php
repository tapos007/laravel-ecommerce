<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\File;
use Storage;


class ShopController extends Controller
{
    public function index()
    {

        $latestProduct =  Product::with('files','categories','tags')->latest()->take(12)->get();
        $featuredProduct = Product::with('files','categories','tags')->where('featured',1)->get()->random(12);

        return view('shop.index',compact('latestProduct','featuredProduct'));
    }
}


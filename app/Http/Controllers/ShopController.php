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

    public function featured()
    {
        $latestProduct = Product::with('files','categories','tags')->where('featured',1)->latest()->paginate(12);
        return view('shop.featured',compact('latestProduct'));
    }
    public function products(Request $request)
    {

        $perpage = $request->get('limit', 12);
        $latestProduct = Product::with('files','categories','tags')->latest()->paginate($perpage);

        return view('shop.products',compact('latestProduct'));
    }
}


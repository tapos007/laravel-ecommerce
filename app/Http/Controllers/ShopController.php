<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\File;
use Storage;


class ShopController extends Controller
{
    public function index()
    {

        $latestProduct = Product::with('files', 'categories', 'tags')->latest()->take(12)->get();
        $featuredProduct = Product::with('files', 'categories', 'tags')->where('featured', 1)->get()->random(12);

        return view('shop.index', compact('latestProduct', 'featuredProduct'));
    }

    public function featured(Request $request)
    {
        $perpage = $request->get('limit', 12);
        $filter = $request->get('filter', 'title');
        $latestProduct = Product::with('files', 'categories', 'tags')->where('featured',
            1)->latest($filter)->latest('id')->paginate($perpage);
        return view('shop.featured', compact('latestProduct'));
    }

    public function products(Request $request)
    {

        $perpage = $request->get('limit', 12);
        $filter = $request->get('filter', 'title');
        $latestProduct = Product::with('files', 'categories',
            'tags')->latest($filter)->latest('id')->paginate($perpage);

        return view('shop.products', compact('latestProduct'));
    }

    public function categories($category_id, $subcategory_id = null)
    {
       // $product = Product::with(['files', 'tags','categories'])->get();
          $product = Category::with('products')->categoryproduct($category_id,$subcategory_id)->get();
        dd($product);
    }
}


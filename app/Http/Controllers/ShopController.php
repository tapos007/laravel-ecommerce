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
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $latestProduct = Product::with('files', 'categories', 'tags')->latest()->take(12)->get();
        $featuredProduct = Product::with('files', 'categories', 'tags')->where('featured', 1)->get()->random(12);

        return view('shop.index', compact('latestProduct', 'featuredProduct'));
    }

    /**
     * it gets feature product
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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

    public function categories(Request $request, $category_id, $subcategory_id = null)
    {
        $perpage = $request->get('limit', 12);
        $filter = $request->get('filter', 'title');
        $latestProduct = Product::whereHas('categories', function ($query) use ($category_id, $subcategory_id) {
            $query->where('categories.parent_id', $category_id);
            if ($subcategory_id != null) {
                $query->Where('categories.id', $subcategory_id);
            }


        })->with('files', 'tags', 'categories')->latest($filter)->latest('id')->paginate($perpage);
        return view('shop.categories', compact('latestProduct'));
    }

    public function product(Product $product)
    {
        $product_info = $product->first()->load('files', 'categories', 'tags');
     //   dd($product_info);
        return view('shop.single_product', compact('product_info'));
    }
}


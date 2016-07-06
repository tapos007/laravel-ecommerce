<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Cart;
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
        $visitedProduct = Product::visitedproduct()->with('files', 'categories', 'tags')->latest()->get();
        $latestProduct = Product::with('files', 'categories', 'tags')->latest()->take(12)->get();
        $featuredProduct = Product::with('files', 'categories', 'tags')->where('featured', 1)->get()->random(12);
        return view('shop.index', compact('latestProduct', 'featuredProduct', 'visitedProduct'));
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

    public function wishlist()
    {
        $latestProduct = Product::wishlistproduct()->with('files', 'categories', 'tags')->latest()->paginate(10);
        return view('shop.wishlist', compact('latestProduct'));

    }

    public function addcard(Product $product_id)
    {
        $product = $product_id;
        //   $rowId = Cart::search(array('id' => $product->id));
        //  Cart::add(array('id' => $product->id, 'name' => $product->title, 'qty' => 5, 'price' => $product->sell_price));

        Cart::add(array('id' => $product->id, 'name' => $product->title, 'qty' => 1, 'price' => $product->sell_price));
        return back();
    }

    public function cart()
    {
        return view('shop.cart');
    }
}


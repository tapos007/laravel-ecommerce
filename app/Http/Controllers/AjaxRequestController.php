<?php

namespace App\Http\Controllers;

use Closure;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Cookie;

class AjaxRequestController extends Controller
{
    public function addwishlist(Request $request)
    {

        if ($request->hasCookie('wishlist_product')) {
            $info = Cookie::get('wishlist_product');
            if (!in_array($request->id, $info)) {
                $info[] = $request->id;
                Cookie::queue(cookie()->forever('wishlist_product', $info));
            }


        } else {
            $product_list = [];
            $product_list[] = $request->id;
             Cookie::queue(cookie()->forever('wishlist_product', $product_list));
        }
        return json_encode(["info"=>"added"]);
    }
}

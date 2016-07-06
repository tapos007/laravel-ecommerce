<?php

namespace App\Http\Controllers;

use Closure;
use Gloudemans\Shoppingcart\Facades\Cart;
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
        return json_encode(["info" => "added"]);
    }

    public function showCart()
    {
        $product_list = ["products" => []];
        $products = Cart::content()->toArray();


        if (count($products) > 0) {
            //$product_list['products'] = $products;
            foreach ($products as $product) {
                $product_list['products'][] = $product;
            }
            $product_list['success'] = "data found";
        } else {
            $product_list['error'] = "data not found";
        }
//        $product_list['products'] =
//            [
//                [
//                    "rowId" => "620d670d95f0419e35f9182695918c68",
//                    "id" => 11,
//                    "name" => "Sit distinctio.",
//                    "qty" => 1,
//                    "price" => 690.0,
//                    "tax" => 103.5,
//                    "subtotal" => 690.0,
//                ],
//                [
//                    "rowId" => "bb4a6db4295d6be8bd12791ed5650087",
//                    "id" => 14,
//                    "name" => "Mollitia totam.",
//                    "qty" => 1,
//                    "price" => 537.0,
//                    "tax" => 80.55,
//                    "subtotal" => 537.0,
//                ],
//                [
//                    "rowId" => "4f2d2d0709b007102f7fe33cea201887",
//                    "id" => 20,
//                    "name" => "Sunt adipisci.",
//                    "qty" => 1,
//                    "price" => 682.0,
//                    "tax" => 102.3,
//                    "subtotal" => 682.0
//                ],
//                [
//                    "rowId" => "8d9f890006ebdf1a55d2d2b795700dba",
//                    "id" => 46,
//                    "name" => "Labore maiores.",
//                    "qty" => 1,
//                    "price" => 201.0,
//                    "tax" => 30.15,
//                    "subtotal" => 201.0
//                ],
//                [
//                    "rowId" => "49b344bb1c30597cf0a6df3a0cd1f5dc",
//                    "id" => 58,
//                    "name" => "Repudiandae sint.",
//                    "qty" => 1,
//                    "price" => 995.0,
//                    "tax" => 149.25,
//                    "subtotal" => 995.0,
//                ]
//            ];
//        $product_list['success'] = "data found";
        return $product_list;
    }

    public function productDelete($product_id)
    {
        Cart::remove($product_id);
        return ["success"=>"delete complete"];
    }

    public function productUpdate($product_id, Request $request)
    {


        Cart::update($product_id, $request->qty);
        return ["success"=>"update complete"];

    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;

class VisitedProductMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        if ($request->hasCookie('visited_product')) {
            $info = Cookie::get('visited_product');
            if (!in_array($request->product_id, $info)) {
                $info[] = $request->product_id;
                return $response->withCookie(cookie()->forever('visited_product', $info));
            }
            return $response;

        } else {
            $product_list = [];
            $product_list[] = $request->product_id;
            return $response->withCookie(cookie()->forever('visited_product', $product_list));
        }

    }
}

<?php
/**
 * Created by PhpStorm.
 * User: tapos
 * Date: 6/30/16
 * Time: 1:19 AM
 */

namespace App\Http\ViewComposers;

use App\Category;
use Illuminate\View\View;



class CategoryComposer
{
    public function compose(View $view)
    {
        $view->with('categories', Category::with('children')->where('parent_id',0)->get());
    }

}
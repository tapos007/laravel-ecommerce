<?php

use App\Category;
use App\File;
use App\Product;
use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTagFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        foreach ($products as $product) {
            $category_ids = Category::where('parent_id', '!=',
                0)->orderBy(DB::raw('RAND()'))->take(5)->get()->pluck('id')->toArray();
            $file_ids = File::orderBy(DB::raw('RAND()'))->take(5)->get()->pluck('id')->toArray();
            $tag_ids = Tag::orderBy(DB::raw('RAND()'))->take(5)->get()->pluck('id')->toArray();
            $product->categories()->attach($category_ids);
            $product->tags()->attach($tag_ids);
            $product->files()->attach($file_ids);

        }
    }
}

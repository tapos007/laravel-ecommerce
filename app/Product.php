<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cookie;

class Product extends Model {

	protected $table = 'products';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	/**
	 * product has many tags
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
	public function tags()
	{
		return $this->belongsToMany(Tag::class,'product_tag');
	}

	public function categories()
	{
		return $this->belongsToMany(Category::class,'category_product');
	}
	public function files()
	{
		return $this->belongsToMany(File::class,'file_product');
	}

	public function scopeLatestProduct($query)
	{
		return $query->where('active', 1);
	}

	public function scopeVisitedProduct($query)
	{
		return $query->whereIn('id', Cookie::get('visited_product'));
	}
	
	public function scopeWishlistProduct($query)
	{
		return $query->whereIn('id', Cookie::get('wishlist_product'));
	}
}
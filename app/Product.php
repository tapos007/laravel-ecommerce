<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
}
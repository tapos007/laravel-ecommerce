<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

	protected $table = 'tags';
	public $timestamps = true;

	public function products()
	{
		return $this->belongsToMany(Product::class,'product_tag');
	}
}
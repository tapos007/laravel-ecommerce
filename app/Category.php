<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $table = 'categories';
	public $timestamps = true;
	protected $fillable = array('name');

	public function products()
	{
		return $this->belongsToMany(Product::class,'category_product');
	}
	public function parent()
	{
		return $this->belongsTo(Category::class, 'parent_id');
	}

	public function children()
	{
		return $this->hasMany(Category::class, 'parent_id');
	}

	public function scopeCategoryProduct($query,$cat_id,$sub_id=null)
	{
		if($sub_id!=null){
			$query = $query->where('id',$sub_id);
		}else{
			$query = $query->where('parent_id',$cat_id);
		}

		return $query;
	}

}
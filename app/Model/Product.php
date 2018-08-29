<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product';
	protected $primaryKey = 'id';

	protected $fillable=['name','description','price','sale','quanlity','status','stock','image','content','salefrom','saleto'];

	public $timestamps = false; 

	public function subcategory()
	{
		return $this->belongsTo('App\Model\Subcategory','subcat_id');
	}
	public function productimages()
	{
		return $this->hasMany('App\Model\Productimage','product_id');
	}
	public function orderdetail()
	{
		return $this->hasMany('App\Model\Orderdetail','id');
	}
	public function comment()
	{
		return $this->hasMany('App\Model\Comment','id');
	}
}

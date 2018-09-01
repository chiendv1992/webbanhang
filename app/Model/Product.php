<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product';
	protected $primaryKey = 'id';

	protected $fillable=['name','subcate_id','slug','content','description','price','sale','qty','status','image','fromsale','tosale','status'];

	public $timestamps = false; 

	public function subcategory()
	{
		return $this->belongsTo('App\Model\Subcategory','subcate_id');
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

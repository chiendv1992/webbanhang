<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product';
	protected $primaryKey = 'id';

	protected $fillable = ['name','cate_id','slug','content','description','price','sale','qty','image','fromsale','tosale','status'];

	public $timestamps = false; 

	public function category()
	{
		return $this->belongsTo('App\Model\Category','cate_id');
	}
	public function images()
	{
		return $this->hasMany('App\Model\Image','product_id');
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

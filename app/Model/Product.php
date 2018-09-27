<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product';
	protected $primaryKey = 'id';

	protected $fillable = ['id','name','cate_id','slug','content','description','price','sale','qty','image','fromsale','tosale','status','created_at','updated_at'];

	public $timestamps = false; 

	public function category()
	{
		return $this->belongsTo('App\Model\Category','cate_id');
	}
	public function image()
	{
		return $this->hasMany('App\Model\Image','id');
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

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='order';
	protected $primaryKey = 'id';

	protected $fillable=['customer_id','date_orders','total','status','type'];

	public $timestamps = false; 

	public function orderdetail()
	{
		return $this->hasMany('App\Model\Orderdetail','order_id');
	}
	public function product()
	{
		return $this->belongsTo('App\Model\Product','id');
	}
	public function customer()
	{
		return $this->belongsTo('App\Model\Customer','customer_id');
	}
}

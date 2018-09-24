<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    protected $table='orderdetail';
	protected $primaryKey = 'id';

	protected $fillable=['order_id','product_id','total','status'];

	public $timestamps = false; 

	public function order()
	{
		return $this->belongsTo('App\Model\Order','order_id');
	}
	public function product()
	{
		return $this->belongsTo('App\Model\Product','product_id');
	}
}

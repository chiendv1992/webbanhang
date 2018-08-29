<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Oderdetail extends Model
{
    protected $table='orderdetail';
	protected $primaryKey = 'id';

	protected $fillable=['orderdate','shippeddate','total','status'];

	public $timestamps = false; 

	public function order()
	{
		return $this->belongsTo('App\Model\Order','id');
	}
	public function product()
	{
		return $this->belongsTo('App\Model\Product','product_id');
	}
}

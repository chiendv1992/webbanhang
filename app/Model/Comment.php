<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='customer';
	protected $primaryKey = 'id';

	protected $fillable=['name','address','phone','	email'];

	public $timestamps = false; 
    public function order()
	{
		return $this->hasMany('App\Model\Order','customer_id');
	}
	public function product()
	{
		return $this->belongsTo('App\Model\Order','product_id');
	}
}

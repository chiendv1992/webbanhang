<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='customer';
	protected $primaryKey = 'id';

	protected $fillable=['name','address','phone','	email','password','gender'];

	public $timestamps = false; 
    public function order()
	{
		return $this->hasMany('App\Model\Order','id');
	}
	public function comment()
	{
		return $this->hasMany('App\Model\Comment','id');
	}
}

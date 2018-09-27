<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   	protected $table='category';
	protected $primaryKey = 'id';

	protected $fillable = ['id','name','status','created_at','updated_at'];

	public $timestamps = false; 
	public function product()
	{
		return $this->hasMany('App\Model\Product','id');
	}
}

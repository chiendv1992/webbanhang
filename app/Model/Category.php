<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   	protected $table='category';
	protected $primaryKey = 'id';

	protected $fillable = ['name','status'];

	public $timestamps = false; 
	public function product()
	{
		return $this->hasMany('App\Model\Product','id');
	}
}

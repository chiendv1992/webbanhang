<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table='subcategory';
	protected $primaryKey = 'id';

	protected $fillable = ['name','cate_id','status'];

	public $timestamps = false; 

	public function category()
	{
		return $this->belongsTo('App\Model\Category','cate_id');
	}
	public function product()
	{
		return $this->hasMany('App\Model\Product','id');
	}	
}

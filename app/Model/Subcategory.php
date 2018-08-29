<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table='subcategory';
	protected $primaryKey = 'id';

	protected $fillable=['name','description','price','sale','quanlity','status','stock','image','content','salefrom','saleto'];

	public $timestamps = false; 

	public function category()
	{
		return $this->belongsTo('App\Model\Category','cat_id');
	}
	public function product()
	{
		return $this->hasMany('App\Model\Product','product_id');
	}	
}

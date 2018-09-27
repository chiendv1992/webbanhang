<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table='image';
	protected $primaryKey = 'id';

	protected $fillable=['id','images','product_id','status'];

	public $timestamps = false; 

	public function product()
	{
		return $this->belongsTo('App\Model\Product','product_id');
	}
}

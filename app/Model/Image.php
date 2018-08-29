<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table='image_product';
	protected $primaryKey = 'id';

	protected $fillable=['images','produc_id'];

	public $timestamps = false; 

	public function product()
	{
		return $this->belongsTo('App\Model\Product','product_id');
	}
}

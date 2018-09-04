<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table='banner';
	protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable=['name','status','type'];
}

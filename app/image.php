<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
	protected $table = 'images';
	protected $fillable = ['image','image_id'];
	public $timestamps = false;
	public function product()
	{
		return $this->belongTo('App\product');
	}
}

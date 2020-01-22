<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class LineCart extends Model
{
    protected $table = "Line_cart";

    public $timestamps = false;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'post_id', 'cart_id', 'price_total', 'quantity'
    ];

    public function user(){

    	return $this->belongsTo('App\User');

    }

    public function post(){

    	return $this->belongsTo('App\Entity\Post');

    }

    public function cart(){

    	return $this->belongsTo('App\Entity\Cart');

    }
}

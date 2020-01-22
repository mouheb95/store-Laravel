<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = "Cart";

    public $timestamps = false;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'status'
    ];

        public function user(){

    	return $this->belongsTo('App\User');

    }

}

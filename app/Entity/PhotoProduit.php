<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class PhotoProduit extends Model
{
	protected $table = "produitphoto";
     protected $fillable = [
       'path', 'post_id',
    ];

    public function post(){

    	return $this->belongsTo('App\Entity\Post');

    }

}

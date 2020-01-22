<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "post";
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'user_id', 'category_id', 'price' , 'verified'

        ];

    public function category(){

    	return $this->belongsTo('App\Entity\Category');

    }

    public function user(){

    	return $this->belongsTo('App\User');

    }
}

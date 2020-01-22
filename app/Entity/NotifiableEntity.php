<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class NotifiableEntity extends Model
{
    protected $table = "notifiable_entity";

    public $timestamps = false;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'identifier', 'class',
    ];

        public function user(){

    	return $this->belongsTo('App\User','identifier');

    }

}
	
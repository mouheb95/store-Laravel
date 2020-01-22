<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'Messages_text', 'status', 'receiver'
    ];

        public function user(){

        return $this->belongsTo('App\User','receiver');

    }

        public function message(){

        return $this->belongsTo('App\Entity\Message');

    }
}

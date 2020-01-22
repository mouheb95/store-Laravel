<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class DateMessage extends Model
{
	protected $table = "datemessage";
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date_envoi_message', 'date_lecture_message', 'user_id', 'message_id'
    ];

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function message(){
        
        return $this->belongsTo('App\Entity\Message');
    }
}

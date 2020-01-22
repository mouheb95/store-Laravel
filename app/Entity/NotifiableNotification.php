<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class NotifiableNotification extends Model
{
    protected $table = "notifiable_notification";

    public $timestamps = false;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'notification_id', 'notifiable_entity_id', 'seen'
    ];

        public function user(){

    	return $this->belongsTo('App\User','notifiable_entity_id');

    }

    public function notification(){

    	return $this->belongsTo('App\Entity\Notification');

    }
}

<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = "Category";
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
    ];
}

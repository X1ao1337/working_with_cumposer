<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewM extends Model
{
    public $table = "users";
	public $timestamps = false;
    protected $fillable = 
    [
    	
    	'number',
        'name', 
        'age',
        'password'
    ];

}

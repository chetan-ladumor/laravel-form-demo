<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Database\Eloquent\Model;

class Registration extends Authenticatable
{
	
    protected $fillable= ['name','email','password'];
    protected  $hidden=['password', 'remember_token'];

    /**
     * Add a mutator to ensure hashed passwords use before inserting data into the database 
     */
   
    public function setPasswordAttribute($password){
    	$this->attributes['password'] = bcrypt($password);
    }
}

<?php 

class Userdata extends Eloquent{
	protected $table = 'userdatas';
	protected $fillable = array('email', 'username', 'password', 'address');		
}
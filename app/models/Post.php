<?php 

class Post extends Eloquent{
	protected $fillable = array('title', 'body', 'category_id', 'user_id');		
}
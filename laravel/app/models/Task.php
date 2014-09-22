<?php

class Task extends  Eloquent
{

		protected $table = 'tasks';

		public $timestamps = false;

	protected $fillable = ['text'];

	//public static $pages = 2;


	public function users()
	{
		
        return $this->belongsToMany('User');
	}


}
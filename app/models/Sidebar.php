<?php

class Sidebar extends Eloquent {
	protected $table = 'sidebar';
	
	protected $fillable = array('title', 'body', 'position');
	
	public static $rules = array(
				'title' => 'required',
				'body' => 'required'
				
	);
	
	public static function validate($input)
	{
		return Validator::make($input, static::$rules);
	}

	public static function admin_sidebar()
	{
		return DB::table('sidebar')->orderBy('id', 'desc')->paginate(30);
	}
	
}
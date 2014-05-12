<?php

class Admin extends Eloquent {
	
	protected $fillable = array('*');
	
	public static function user($id)
	{
		return DB::table('users')->where('id', '=', $id)->first();
	}
	
	public static function article($id)
	{
		return DB::table('articles')->where('id', '=', $id)->first();
	}
}
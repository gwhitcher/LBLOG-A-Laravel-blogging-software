<?php

class Nav extends Eloquent {
	
	protected $table = 'nav';
	
	protected $fillable = array('title', 'url', 'position');
	
	public static $rules = array(
				'title' => 'required',
				'url' => 'required|url'
				
	);
	
	public static function validate($input)
	{
		return Validator::make($input, static::$rules);
	}
	
	public static function index()
	{
		return DB::table('nav')->orderBy('id', 'desc')->paginate(Config::get('lblog_config.articles_per_page'));
	}
	
	public static function admin_nav()
	{
		return DB::table('nav')->orderBy('id', 'desc')->paginate(30);
	}
	
	public static function show($id, $slug)
	{
		return DB::table('nav')->where('slug', '=', $slug)->get();
	}
}
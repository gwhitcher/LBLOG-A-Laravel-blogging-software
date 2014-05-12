<?php

class Categories extends Eloquent {
	
	protected $fillable = array('title', 'slug', 'metadescription', 'metakeywords');
	
	public static $rules = array(
				'title' => 'required|min:5',
				'slug' => 'unique:articles,slug'
				
	);
	
	public static function validate($input)
	{
		return Validator::make($input, static::$rules);
	}
	
	public static function index()
	{
		return DB::table('categories')->orderBy('id', 'desc')->paginate(Config::get('lblog_config.articles_per_page'));
	}
	
	public static function admin_categories()
	{
		return DB::table('categories')->orderBy('id', 'desc')->paginate(30);
	}
	
	public static function show($id, $slug)
	{
		return DB::table('categories')->where('slug', '=', $slug)->get();
	}
}
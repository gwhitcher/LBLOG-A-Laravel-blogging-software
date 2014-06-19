<?php

class Pages extends Eloquent {
	
	protected $fillable = array('title', 'slug', 'body', 'metadescription', 'metakeywords');
	
	public static $rules = array(
				'title' => 'required|min:5',
				'slug' => 'unique:articles,slug',
				'body' => 'required|min:5',
				
	);
	
	public static function validate($input)
	{
		return Validator::make($input, static::$rules);
	}
	
	public static function index()
	{
		return DB::table('pages')->orderBy('id', 'desc')->paginate(Config::get('lblog_config.articles_per_page'));
	}
	
	public static function admin_pages()
	{
		return DB::table('pages')->orderBy('id', 'desc')->paginate(30);
	}
	
	public static function show($slug)
	{
		return DB::table('pages')->where('slug', '=', $slug)->get();
	}
}
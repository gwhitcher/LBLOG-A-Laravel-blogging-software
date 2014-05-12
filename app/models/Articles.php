<?php

class Articles extends Eloquent {
	
	protected $fillable = array('category_id', 'title', 'date', 'slug', 'body', 'featured', 'metadescription', 'metakeywords', 'slider', 'updated_at');
	
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
		return DB::table('articles')->orderBy('id', 'desc')->paginate(Config::get('lblog_config.articles_per_page'));
	}
	
	public static function admin_articles()
	{
		return DB::table('articles')->orderBy('id', 'desc')->paginate(30);
	}
	
	public static function show($id, $slug)
	{
		return DB::table('articles')->where('id', '=', $id)->get();
	}
	
	public static function categories($slug)
	{
		$category = DB::table('categories')->where('slug', '=', $slug)->first();
		return DB::table('articles')->where('category_id', '=', $category->id)->paginate(Config::get('lblog_config.articles_per_page'));
	}
}
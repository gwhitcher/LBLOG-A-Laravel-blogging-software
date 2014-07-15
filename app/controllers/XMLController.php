<?php

class XMLController extends BaseController {
	
	public function sitemap()
	{
		$pages = Pages::orderBy('ID', 'DESC')->get();
		$categories = Categories::orderBy('ID', 'DESC')->get();
		return View::make('xml.sitemap', array('pages' => $pages, 'categories' => $categories))->with('layout', 'layouts.'.Config::get('lblog_config.theme'));
	}
	
	public function rss()
	{
		$articles = Articles::orderBy('ID', 'DESC')->get();
		return View::make('xml.rss', array('articles' => $articles))->with('layout', 'layouts.'.Config::get('lblog_config.theme'));
	}
}
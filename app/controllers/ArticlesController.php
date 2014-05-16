<?php

class ArticlesController extends BaseController {

	public function index()
	{
		$nav_items = array(Nav::all());
		$sidebar_items = array(Sidebar::all());
		$articles = array(Articles::index());
		return View::make('home')->with('layout', 'layouts.'.Config::get('lblog_config.theme'))->with('articles', $articles)->with('sidebar_items', $sidebar_items)->with('nav_items', $nav_items);
	}

	public function show($id, $slug)
	{
		$nav_items = array(Nav::all());
		$sidebar_items = array(Sidebar::all());
		$articles = array(Articles::show($id, $slug));
		return View::make('article')->with('layout', 'layouts.'.Config::get('lblog_config.theme'))->with('articles', $articles)->with('sidebar_items', $sidebar_items)->with('nav_items', $nav_items);
	}
	
	public function categories($slug)
	{
		$nav_items = array(Nav::all());
		$sidebar_items = array(Sidebar::all());
		$articles = array(Articles::categories($slug));
		return View::make('category')->with('layout', 'layouts.'.Config::get('lblog_config.theme'))->with('articles', $articles)->with('sidebar_items', $sidebar_items)->with('nav_items', $nav_items);
	}

}
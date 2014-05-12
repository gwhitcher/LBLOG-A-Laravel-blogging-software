<?php

class ArticlesController extends BaseController {

	public function index()
	{
		$nav_items = array(Nav::all());
		$sidebar_items = array(Sidebar::all());
		$articles = array(Articles::index());
		return View::make('home')->with('articles', $articles)->with('sidebar_items', $sidebar_items)->with('nav_items', $nav_items);
	}

	public function show($id, $slug)
	{
		$nav_items = array(Nav::all());
		$sidebar_items = array(Sidebar::all());
		$articles = array(Articles::show($id, $slug));
		return View::make('article')->with('articles', $articles)->with('sidebar_items', $sidebar_items)->with('nav_items', $nav_items);
	}
	
	public function categories($slug)
	{
		$nav_items = array(Nav::all());
		$sidebar_items = array(Sidebar::all());
		$articles = array(Articles::categories($slug));
		return View::make('category')->with('articles', $articles)->with('sidebar_items', $sidebar_items)->with('nav_items', $nav_items);
	}

}
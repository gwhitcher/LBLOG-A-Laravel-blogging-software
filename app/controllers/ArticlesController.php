<?php

class ArticlesController extends BaseController {

	public function index()
	{
		$nav_items = Nav::orderBy('position', 'ASC')->get();
		$sidebar_items = Sidebar::orderBy('position', 'ASC')->get();
		$articles = Articles::home();
		$slider_articles = Articles::where('slider', 1)->take(5)->get();
		$page = 'themes.'.''.Config::get('lblog_config.theme').'.home';
		return View::make($page, array('nav_items' => $nav_items, 'sidebar_items' => $sidebar_items, 'articles' => $articles, 'slider_articles' => $slider_articles))->with('layout', 'layouts.'.Config::get('lblog_config.theme'));
	}

	public function show($id, $slug)
	{
		$nav_items = Nav::orderBy('position', 'ASC')->get();
		$sidebar_items = Sidebar::orderBy('position', 'ASC')->get();
		$articles = Articles::show($id, $slug);
		$page = 'themes.'.''.Config::get('lblog_config.theme').'.article';
		return View::make($page, array('nav_items' => $nav_items, 'sidebar_items' => $sidebar_items, 'articles' => $articles))->with('layout', 'layouts.'.Config::get('lblog_config.theme'));
	}
	
	public function categories($slug)
	{
		$prettyslug = ucfirst($slug);
		$nav_items = Nav::orderBy('position', 'ASC')->get();
		$sidebar_items = Sidebar::orderBy('position', 'ASC')->get();
		$articles = Articles::categories($slug);
		$page = 'themes.'.''.Config::get('lblog_config.theme').'.category';
		return View::make($page, array('nav_items' => $nav_items, 'sidebar_items' => $sidebar_items, 'articles' => $articles, 'slug' => $prettyslug))->with('layout', 'layouts.'.Config::get('lblog_config.theme'));
	}

}
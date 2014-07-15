<?php

class PagesController extends BaseController {
	
	public function show($slug)
	{
		$nav_items = Nav::orderBy('position', 'ASC')->get();
		$sidebar_items = Sidebar::orderBy('position', 'ASC')->get();
		$pages = Pages::show($slug);
		if (!empty($pages)) {
		$page = 'themes.'.''.Config::get('lblog_config.theme').'.page';
		return View::make($page, array('nav_items' => $nav_items, 'sidebar_items' => $sidebar_items, 'pages' => $pages))->with('layout', 'layouts.'.Config::get('lblog_config.theme'));
		} else {
			return App::abort(404, 'Page not found');
		}
	}
}
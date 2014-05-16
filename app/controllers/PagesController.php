<?php

class PagesController extends BaseController {

	/* ABOUT */
	public function about()
	{		
		$nav_items = array(Nav::all());
		$sidebar_items = array(Sidebar::all());
		return View::make('pages.about')->with('layout', 'layouts.'.Config::get('lblog_config.theme'))->with('sidebar_items', $sidebar_items)->with('nav_items', $nav_items);
	}

}
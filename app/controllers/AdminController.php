<?php

class AdminController extends BaseController {
	
	/* ADMIN HOME */
	public function dashboard()
	{
		return View::make('sessions.index');
	}
	
	/* ARTICLES */
	public function articles()
	{
		$articles = array(Articles::admin_articles());
		return View::make('admin.articles')->with('articles', $articles);
	}
	
	public function articlecreate() 
	{
		$categories = DB::table('categories')->get();
		$input = Input::all();
		if (!empty($input)) {
		$validation = Articles::validate($input);
		if  ($validation->fails()) {
			Input::flash();
			return Redirect::to('admin/article/create')->with('flash_message', 'Article errors.')->withErrors($validation);
		} else {	
			$article = new Articles;
			$file = Input::file('featured');
			if (!empty($file)) { 
			$destination = public_path().'/images/posts/featured/';
   			$filename = $file->getClientOriginalName();
   			$extension = $file->getClientOriginalExtension(); 
  			$upload_success = $file->move($destination, $filename); 
			$article->featured = $filename;
			}
			$article->title = $input['title'];
			$article->slug = Str::slug($input['title']);
			$article->category_id = $input['category_id'];
			$article->body = $input['body'];
			$article->metadescription = $input['metadescription'];
			$article->metakeywords = $input['metakeywords'];
			$article->slider = $input['slider'];
			$article->status = $input['status'];
			$article->save();
			return Redirect::to('/admin/dashboard')->with('flash_message', 'Article created.');
		}
		}
		return View::make('admin.articlecreate')->with('categories', $categories);
	}
	
	public function articleedit($id)
	{
		$categories = DB::table('categories')->get();
		$article = Articles::find($id);
		$input = Input::all();
		if (!empty($input)) {
		$validation = Articles::validate($input);
        if ($validation->passes())
        {
			$file = Input::file('featured');
			if (!empty($file)) { 
			$destination = public_path().'/images/posts/featured/';
   			$filename = $file->getClientOriginalName();
   			$extension = $file->getClientOriginalExtension(); 
  			$upload_success = $file->move($destination, $filename); 
			$input['featured'] = $filename;
			} else {
			$input['featured'] = $article->featured;	
			}
			$article->title = $input['title'];
			$article->slug = Str::slug($input['title']);
			$article->category_id = $input['category_id'];
			$article->body = $input['body'];
			$article->metadescription = $input['metadescription'];
			$article->metakeywords = $input['metakeywords'];
			$article->slider = $input['slider'];
			$article->status = $input['status'];
			$article->update($input);
            return Redirect::to('/admin/dashboard')->with('article', $article)->with('flash_message', 'Article updated.');
        } else {
			Input::flash();
			return Redirect::back()->with('flash_message', 'Article errors.')->withErrors($validation);
		}
		}
		return View::make('admin.articleedit', compact('categories'))->with('article', $article)->with('categories', $categories);	
	}
	
	public function articledelete($id)
	{
		$article = Articles::find($id);
		$article->delete();
		return Redirect::intended('/admin/dashboard')->with('flash_message', 'Article deleted.');
	}
	
	/* CATEGORIES */
	public function categories()
	{
		$categories = array(Categories::admin_categories());
		return View::make('admin.categories')->with('categories', $categories);
	}
	
	public function categorycreate() 
	{
		$input = Input::all();
		if (!empty($input)) {
		$validation = Categories::validate($input);
		if  ($validation->fails()) {
			Input::flash();
			return Redirect::to('admin/category/create')->with('flash_message', 'Category errors.')->withErrors($validation);
		} else {	
			$category = new Categories;
			$category->title = $input['title'];
			$category->slug = Str::slug($input['title']);
			$category->metadescription = $input['metadescription'];
			$category->metakeywords = $input['metakeywords'];
			$category->save();
			return Redirect::to('/admin/dashboard')->with('flash_message', 'Category created.');
		}
		}
		return View::make('admin.categorycreate');
	}
	
	public function categoryedit($id)
	{
		$category = Categories::find($id);
		$input = Input::all();
		if (!empty($input)) {
		$validation = Categories::validate($input);
        if ($validation->passes())
        {
			$category->slug = Str::slug($input['title']);
			$category->update($input);
            return Redirect::to('/admin/dashboard')->with('category', $category)->with('flash_message', 'Category updated.');
        } else {
			Input::flash();
			return Redirect::back()->with('flash_message', 'Category errors.')->withErrors($validation);
		}
		}
		return View::make('admin.categoryedit')->with('category', $category);	
	}
	
	public function categorydelete($id)
	{
		$category = Categories::find($id);
		$category->delete();
		return Redirect::intended('/admin/dashboard')->with('flash_message', 'Category deleted.');
	}
	
	/* PAGES */
	public function pages()
	{
		$pages = array(Pages::admin_pages());
		return View::make('admin.pages')->with('pages', $pages);
	}
	
	public function pagecreate() 
	{
		$input = Input::all();
		if (!empty($input)) {
		$validation = Pages::validate($input);
		if  ($validation->fails()) {
			Input::flash();
			return Redirect::to('admin/page/create')->with('flash_message', 'Page errors.')->withErrors($validation);
		} else {	
			$page = new Pages;
			$page->title = $input['title'];
			$page->slug = Str::slug($input['title']);
			$page->body = $input['body'];
			$page->metadescription = $input['metadescription'];
			$page->metakeywords = $input['metakeywords'];
			$page->save();
			return Redirect::to('/admin/dashboard')->with('flash_message', 'Page created.');
		}
		}
		return View::make('admin.pagecreate');
	}
	
	public function pageedit($id)
	{
		$page = Pages::find($id);
		$input = Input::all();
		if (!empty($input)) {
		$validation = Pages::validate($input);
        if ($validation->passes())
        {
			$page->slug = Str::slug($input['title']);
			$page->update($input);
            return Redirect::to('/admin/dashboard')->with('page', $page)->with('flash_message', 'Page updated.');
        } else {
			Input::flash();
			return Redirect::back()->with('flash_message', 'Page errors.')->withErrors($validation);
		}
		}
		return View::make('admin.pageedit')->with('page', $page);	
	}
	
	public function pagedelete($id)
	{
		$page = Pages::find($id);
		$page->delete();
		return Redirect::intended('/admin/dashboard')->with('flash_message', 'Page deleted.');
	}
	
	/* NAVIGATION */
	public function nav()
	{
		$nav = array(Nav::admin_nav());
		return View::make('admin.nav')->with('nav', $nav);
	}
	
	public function navcreate() 
	{
		$input = Input::all();
		if (!empty($input)) {
		$validation = Nav::validate($input);
		if  ($validation->fails()) {
			Input::flash();
			return Redirect::to('admin/nav/create')->with('flash_message', 'Nav errors.')->withErrors($validation);
		} else {	
			$nav = new Nav;
			$nav->title = $input['title'];
			$nav->url = $input['url'];
			$nav->save();
			return Redirect::to('/admin/dashboard')->with('flash_message', 'Nav created.');
		}
		}
		return View::make('admin.navcreate');
	}
	
	public function navedit($id)
	{
		$nav = Nav::find($id);
		$input = Input::all();
		if (!empty($input)) {
		$validation = Nav::validate($input);
        if ($validation->passes())
        {
			$nav->update($input);
            return Redirect::to('/admin/dashboard')->with('nav', $nav)->with('flash_message', 'Nav updated.');
        } else {
			Input::flash();
			return Redirect::back()->with('flash_message', 'Nav errors.')->withErrors($validation);
		}
		}
		return View::make('admin.navedit')->with('nav', $nav);	
	}
	
	public function navdelete($id)
	{
		$nav_item = Nav::find($id);
		$nav_item->delete();
		return Redirect::intended('/admin/dashboard')->with('flash_message', 'Nav item deleted.');
	}
	
	/* SIDEBAR */
	public function sidebar()
	{
		$sidebar = array(Sidebar::admin_sidebar());
		return View::make('admin.sidebar')->with('sidebar', $sidebar);
	}
	
	public function sidebarcreate() 
	{
		$input = Input::all();
		if (!empty($input)) {
		$validation = Sidebar::validate($input);
		if  ($validation->fails()) {
			Input::flash();
			return Redirect::to('admin/sidebar/create')->with('flash_message', 'Sidebar errors.')->withErrors($validation);
		} else {	
			$sidebar = new Sidebar;
			$sidebar->title = $input['title'];
			$sidebar->body = $input['body'];
			$sidebar->position = $input['position'];
			$sidebar->save();
			return Redirect::to('/admin/dashboard')->with('flash_message', 'Sidebar created.');
		}
		}
		return View::make('admin.sidebarcreate');
	}
	
	public function sidebaredit($id)
	{
		$sidebar = Sidebar::find($id);
		$input = Input::all();
		if (!empty($input)) {
		$validation = Sidebar::validate($input);
        if ($validation->passes())
        {
			$sidebar->update($input);
            return Redirect::to('/admin/dashboard')->with('sidebar', $sidebar)->with('flash_message', 'Sidebar updated.');
        } else {
			Input::flash();
			return Redirect::back()->with('flash_message', 'Sidebar errors.')->withErrors($validation);
		}
		}
		return View::make('admin.sidebaredit')->with('sidebar', $sidebar);	
	}
	
	public function sidebardelete($id)
	{
		$sidebar = Sidebar::find($id);
		$sidebar->delete();
		return Redirect::intended('/admin/dashboard')->with('flash_message', 'Sidebar deleted.');
	}
}
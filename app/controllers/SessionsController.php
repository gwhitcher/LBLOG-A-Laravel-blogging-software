<?php

class SessionsController extends BaseController {
	
	public function login()
	{
		return View::make('admin.login');
	}
	
	public function users()
	{
		$users = array(User::all());
		return View::make('admin.users')->with('users', $users);
	}
	
	public function usercreate() 
	{
		$input = Input::all();
		if (!empty($input)) {
		$validation = User::validate($input);
		if  ($validation->fails()) {
			Input::flash();
			return Redirect::to('/admin/dashboard')->with('flash_message', 'User errors.')->withErrors($validation);
		} else {	
			$user = new User;
			$user->username = $input['username'];
			$user->email = $input['email'];
			$user->password = Hash::make($input['password']);
			$user->save();
			return Redirect::to('/admin/dashboard')->with('flash_message', 'User created.');
		}
		}
		return View::make('admin.usercreate');
	}
	
	public function useredit($id)
	{
		$user = User::find($id);
		$input = Input::all();
		if (!empty($input)) {
		$validation = User::validate($input);
        if ($validation->passes())
        {
			$user->username = $input['username'];
			$user->email = $input['email'];
			$user->password = Hash::make($input['password']);
			$user->update($input);
            return Redirect::to('/admin/dashboard')->with('user', $user)->with('flash_message', 'User updated.');
        } else {
			Input::flash();
			return Redirect::back()->with('flash_message', 'User errors.')->withErrors($validation);
		}
		}
		return View::make('admin.useredit')->with('user', $user);	
	}

	public function store()
	{
		$input = Input::all();
		
		$attempt = Auth::attempt([
			'email' => $input['email'],
			'password' => $input['password']
		]);
		
		if ($attempt) return Redirect::intended('/admin/dashboard')->with('flash_message', 'You have been logged in!');
		
		return Redirect::back()->with('flash_message', 'Invalid login credentials!')->withInput();
		
	}

	public function destroy()
	{
		Auth::logout();
		return Redirect::to('/')->with('flash_message', 'You have been logged out!');
	}

}
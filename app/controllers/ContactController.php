<?php 

class ContactController extends BaseController {

//Server Contact view:: we will create view in next step
 public function getContact(){
	 		$nav_items = Nav::orderBy('position', 'ASC')->get();
			$sidebar_items = Sidebar::orderBy('position', 'ASC')->get();
			$page = 'themes.'.''.Config::get('lblog_config.theme').'.contact';
            return View::make($page, array('nav_items' => $nav_items, 'sidebar_items' => $sidebar_items))->with('layout', 'layouts.'.Config::get('lblog_config.theme'));
        }

        //Contact Form
        public function getContactUsForm(){

            //Get all the data and store it inside Store Variable
            $data = Input::all();
			$nav_items = Nav::orderBy('position', 'ASC')->get();
			$sidebar_items = Sidebar::orderBy('position', 'ASC')->get();
			$page = 'themes.'.''.Config::get('lblog_config.theme').'.contact';
            //Validation rules
            $rules = array (
                'first_name' => 'required|alpha',
                'last_name' => 'required|alpha',
                'phone_number'=>'numeric|min:8',
                'email' => 'required|email',
                'message' => 'required|min:25',
				'captcha' => array('required', 'captcha')
            );

            //Validate data
            $validator  = Validator::make ($data, $rules);

            //If everything is correct than run passes.
            if ($validator -> passes()){

                //Send email using Laravel send function
                Mail::send('emails.contact', $data, function($message) use ($data)
                {
					//email 'From' field: Get users email add and name
                    $message->from($data['email'] , $data['first_name']);
					//email 'To' field: cahnge this to emails that you want to be notified.                    
					$message->to('george@georgewhitcher.com', 'George Whitcher')->subject('Contact: '.$data['first_name'].' '.$data['last_name'].'');
                });

                return View::make($page, array('nav_items' => $nav_items, 'sidebar_items' => $sidebar_items))->with('layout', 'layouts.'.Config::get('lblog_config.theme'));
            } else {
				//return contact form with errors
                return Redirect::to('/contact')->withErrors($validator);
            }
        }
}
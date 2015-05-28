<?php 

class ContactController extends BaseController {


public function ShowForm() {

/* Returns View */

	return View::make('contact');


}




public function handleFormPost() {

/* handles form post */

$input = Input::only('name' , 'lastname', 'phone','email', 'msg');

$validator = Validator::make(Input::all(), ['name' => 'required', 'lastname' => 'required' , 'phone' => 'required|numeric' , 'email' => 'required|email']);

if($validator->fails()){

	return Redirect::back()->withInput()->withErrors($validator -> messages());


} else {


	Mail::send('contactemail' , $input, function($message){

		
		$message->to('alex@calgaryscale.com');

	});

	return 'thanks';


}



}


}
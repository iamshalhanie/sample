<?php

class SampleController extends Controller {

	function index()
	{

		return "shalhanie cute";
	}

	function view()
	{

		return View::make("SampleView"); 
	}
	function model()
	{
		$text = new Sample;
		$text->fName = Input::get('fName'); //fName textfield name
		$text->save();

		return "yehey ".$text->fName;
	}

	function pass($id)
	{
		return $id;
	}

	function getUser($id)
	{
		$user = Sample::find($id);
		$user->fname = 'asia';
		$user->update();

		return $this->viewUserss($id);

	}

	function viewUserss($id)
	{
		
		$user = Sample::find($id);

		return View::make("list_of_users")->with("listofusers",$user);
	}
}

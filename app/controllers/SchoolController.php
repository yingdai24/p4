<?php

class SchoolController extends \BaseController {


	/**
	*
	*/
	public function __construct() {

		# Make sure BaseController construct gets called
		parent::__construct();

		$this->beforeFilter('auth', array('except' => ['getIndex']));

	}


	/**
	* Process the searchform
	* @return View
	*/
	public function getSearch() {

		return View::make('school_search');

	}


	/**
	* Display all schools
	* @return View
	*/
	public function getIndex() {

		# Format and Query are passed as Query Strings
		$format = Input::get('format', 'html');
	
		$query  = Input::get('query');

		$schools = School::search($query);

		# Decide on output method...
		# Default - HTML
		if($format == 'html') {
			return View::make('school_index')
				->with('schools', $schools)
				->with('query', $query);
		}
		# JSON
		elseif($format == 'json') {
			return Response::json($schools);
		}
		# PDF (Coming soon)
		elseif($format == 'pdf') {
			return "This is the pdf (Coming soon).";
		}


	}


	/**
	* Show the "Add a school form"
	* @return View
	*/
	public function getCreate() {

		$counselors = Counselor::getIdNamePair();

    	return View::make('school_add')->with('counselors',$counselors);

	}


	/**
	* Process the "Add a school form"
	* @return Redirect
	*/
	public function postCreate() {

		# Instantiate the school model
		$school = new School();

		$school->fill(Input::all());
		$school->save();

		# Magic: Eloquent
		$school->save();

		return Redirect::action('SchoolController@getIndex')->with('flash_message','New school has been added.');

	}


	/**
	* Show the "Edit a school form"
	* @return View
	*/
	public function getEdit($id) {

		try {
		    $school    = School::findOrFail($id);
		    $counselors = Counselor::getIdNamePair();
		}
		catch(exception $e) {
		    return Redirect::to('/school')->with('flash_message', 'School not found');
		}

    	return View::make('school_edit')
    		->with('school', $school)
    		->with('counselors', $counselors);

	}


	/**
	* Process the "Edit a school form"
	* @return Redirect
	*/
	public function postEdit() {

		try {
	        $school = School::findOrFail(Input::get('id'));
	    }
	    catch(exception $e) {
	        return Redirect::to('/school')->with('flash_message', 'School not found');
	    }

	    # http://laravel.com/docs/4.2/eloquent#mass-assignment
	    $school->fill(Input::all());
	    $school->save();

	   	return Redirect::action('SchoolController@getIndex')->with('flash_message','Your changes have been saved.');

	}


	/**
	* Process school deletion
	*
	* @return Redirect
	*/
	public function postDelete() {

		try {
	        $school = School::findOrFail(Input::get('id'));
	    }
	    catch(exception $e) {
	        return Redirect::to('/school/')->with('flash_message', 'Could not delete school - not found.');
	    }

	    School::destroy(Input::get('id'));

	    return Redirect::to('/school/')->with('flash_message', 'School deleted.');

	}

}
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Homepage
Route::get('/', function()
{
	return View::make('index');
});

//School Search
Route::get('/schoolsearch', function()
{
	return View::make('schoolsearch');
});


//School table CRUD fuction
Route::get('/school', 'SchoolController@getIndex');

Route::get('/school/edit/{id}', 'SchoolController@getEdit');
Route::post('/school/edit', 'SchoolController@postEdit');

Route::get('/school/create', 'SchoolController@getCreate');
Route::post('/school/create', 'SchoolController@postCreate');

Route::post('/school/delete', 'SchoolController@postDelete');

//Search school w/o Ajax or list all schools
Route::get('/school/search', 'SchoolController@getSearch');

Route::get('/list', function() {

	$query = Input::get('query');

	# If there is a query, search the library with that query
	if($query) {

	 $schools = School::with('counselor')
            ->whereHas('counselor', function($q) use($query) {
                $q->where('counselor_name', 'LIKE', "%$query%");
            })
            ->orWhere('school_name', 'LIKE', "%$query%")
            ->orWhere('built_year', 'LIKE', "%$query%")
            ->get();     


	}
	# Otherwise, just fetch all schools
	else {
		$schools = School::all();	
	}

		return View::make('list')
			->with('schools', $schools)
			->with('query', $query);
		
});


//List all counselors 
Route::get('/counselor', function()
{
	$counselors = Counselor::all();
	return View::make('counselor')
			->with('counselors', $counselors);
});


//User SignUp/Login/Logout
Route::get('/signup','UserController@getSignup' );
Route::get('/login', 'UserController@getLogin' );
Route::post('/signup', 'UserController@postSignup' );
Route::post('/login', 'UserController@postLogin' );
Route::get('/logout', 'UserController@getLogout' );










/**
* Debug
* (Implicit Routing)
*/
Route::controller('debug', 'DebugController');


//Debug
Route::get('/debug', function() {
	
	echo '<pre>';
		
	echo '<h1>environment.php</h1>';
	$path   = base_path().'/environment.php';
	
	try {
		$contents = 'Contents: '.File::getRequire($path);
		$exists = 'Yes';
	}
	catch (Exception $e) {
		$exists = 'No. Defaulting to `production`';
		$contents = '';
	}
	
	echo "Checking for: ".$path.'<br>';
	echo 'Exists: '.$exists.'<br>';
	echo $contents;
	echo '<br>';
	
	echo '<h1>Environment</h1>';
	echo App::environment().'</h1>';
	
	echo '<h1>Debugging?</h1>';
	if(Config::get('app.debug')) echo "Yes"; else echo "No";

	echo '<h1>Database Config</h1>';
	print_r(Config::get('database.connections.mysql'));
	
	echo '<h1>Test Database Connection</h1>';
	try {
		$results = DB::select('SHOW DATABASES;');
		echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
		echo "<br><br>Your Databases:<br><br>";
		print_r($results);
	} 
	catch (Exception $e) {
		echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
	}
	
	echo '</pre>';
	
});
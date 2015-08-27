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
Route::get('/',  'HomeController@showHome');
Route::get('blog/show', 'HomeController@blogShow');

/*Route::get('my_login', function(){
	$email = 'foo@bar.com';
	$password = 'kophyo';
	if (Auth::attempt(array('email' => $email, 'password' => $password)))
	{
		return Redirect::intended('blog/create');
	}
});*/
Route::group(['before'=>'auth', 'prefix'=>'admin'], function(){
	/*Route::get('admin/logout', 'AuthController@logout');*/
	Route::get('/',  'AuthController@in');
	Route::post('/', 'AuthController@out');
});

Route::get('users/register', 'UserController@getRegister');
Route::post('users/register', 'UserController@postRegister');
Route::get('login', 'UserController@getLogin');
Route::post('login', 'UserController@postLogin');
Route::get('logout', 'UserController@getLogout');
Route::get('blog/create', ['before'=> 'auth', 'as' => 'blog.create', 'uses'=> function (){
	$categories = Category::lists('name','id');	
	$user_id = Auth::user()->id;
	return View::make('blog/create')
	->with("categories", $categories)
	->with('user_id', $user_id);
}]);
Route::post('blog/create', ['before'=> 'csrf|auth', 'as' => 'blog.post.create', 'uses' => function(){
	$post = Input::except('_token');		
	$rules = [
	'title' => 'required',
	'body' => 'required',
	'category_id' => 'required',
	'user_id' => 'required',
	];
	$validator = Validator::make($post, $rules);
	if ($validator->fails()) {
		return Redirect::route('blog.create')
		->withInput()
		->withErrors($validator);
	}
	else{
		Post::create($post);
		return Redirect::to('blog/show');		
	}			
}]);



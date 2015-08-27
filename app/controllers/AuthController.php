<?php 

class AuthController extends Controller{
	public function in(){
		$decp = DB::table('userdatas')->get();			
		return View::make('admin.index')
		->with('decp', $decp);

	}
	public function out(){
/*		$post = Input::except('_token');
		$rules = [ 'email' => 'required', 'password' => 'required', ];
		$method = Request::method();
		if (Request::isMethod('post'))
		{
			$validator = Validator::make($post, $rules);
			if ($validator->fails()) {
				return Redirect::to('/admin')
				->withInput()
				->withErrors($validator);
			}
			else{
				Post::create($post);
				return Redirect::to('blog/create');
			}
			
		}

	}
}*/	

		if ($this->isPostRequest()) {
			$validator = $this->getLoginValidator();

			if ($validator->passes()) {
				$credentials = $this->getLoginCredentials();	

				if (Auth::attempt($credentials)) {
					Session::flash('message', "Welcome Sir!");
					return Redirect::to("blog/create");
				}

				return Redirect::back()->withErrors([
					"invalid_credential" => ["Credentials invalid."]
					]);
			} else {
				return Redirect::back()
				->withInput()
				->withErrors($validator);
			}
		}

		return View::make("admin.index");
	}
 //Check user’s post request
	protected function isPostRequest()
	{
		return Input::server("REQUEST_METHOD") == "POST";
	}

 //Validate
	protected function getLoginValidator()
	{
		return Validator::make(Input::all(), [
			"email" => "required|email",
			"password" => "required",
			]);
	}
 //Get Login Credentials
	protected function getLoginCredentials()
	{
		return [
		"email" => Input::get("email"),
		"password" => Input::get("password"),
		];
	}
	public function logout(){
		Auth::logout();
		Session::flash('massage', "Your Logouted");
	return Redirect::to('/');
	}
} 
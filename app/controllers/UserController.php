<?php

class UserController extends Controller{

  public function getRegister(){    
    if(Auth::check()){      
    return Redirect::to('login');
  }
  else{
    return View::make('users/register');
  }
}

  public function postRegister(){    
    $data = Input::except('_token');
    $rules = ['email' => 'unique:userdatas,email',
                'username' => 'required',
                'password' => 'required',
                'address' => 'required',];
    $validator = Validator::make($data, $rules);
    if($validator->fails()){
      return Redirect::to('users/register')
      ->withInput()
      ->withErrors($validator);
    }
    else{
           Userdata::create($data);    
            return Redirect::to('login')
              ->withSuccess('Your Member!');
          }
  }


  public function getLogin(){
   if(Auth::check()){
    return Redirect::to('blog/create');
  }
  else{
    return View::make('login');
  }

}

public function postLogin()
{
  $data = Input::except('_token');

  $rules = [ 
  'email' => 'required|email',
  'password'=> 'required',
  ];
  $validator = Validator::make($data, $rules);
  if($validator->fails()){
    return Redirect::to('login')
    ->withInput()
    ->withErrors($validator);
  }
  else{
    Auth::attempt(array('email' => Input::get('email'),'password' => Input::get('password')));
    return Redirect::route('blog.create');    
  }

}


public function getLogout()
{
  Auth::logout();
  return Redirect::to('/');
}



}
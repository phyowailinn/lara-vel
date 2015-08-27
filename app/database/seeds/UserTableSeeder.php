<?php 
class UserTableSeeder extends DatabaseSeeder{
	public function run(){
		DB::table('users')->delete();
		User::create(array(
			'email' => 'foo@bar.com',
			'username' => 'ko phyo',
			'password' => Hash::make('kophyo'),			
			));
		User::create(array(
			'email' => 'link@google.com',
			'username' => 'ko',
			'password' => Hash::make('phyo'),			
			));
	}
}
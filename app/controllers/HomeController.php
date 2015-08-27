<?php 
class HomeController extends Controller{
	public function showHome(){
		return View::make('index');
	}

	public function blogShow(){
		
		$blogs = Post::select('id','title','body')->paginate(10);		
		return View::make('blog.show')
		->with('blogs', $blogs);
		
	}
}
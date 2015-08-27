<?php 
class CategoryTableSeeder extends DatabaseSeeder{
	public function run(){
		DB::table('categorys')->delete();
		Category::create(array(
			'name' => 'Feeling',			
			));
		Category::create(array(
			'name' => 'Phycial',			
			));
		Category::create(array(
			'name' => 'Logical',			
			));
	}
}